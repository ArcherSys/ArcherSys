var pcgfUserList = $('#username_list');
var pcgfSuggestionList = $('#pcgf_pmnamesuggestionlist');
var pcgfLastSearchValue = '';
var pcgfResultCount = 0;
var pcgfLastSelectedIndex = -1;
var pcgfKeyCatched = 0;

function hideSuggestions() {
    // Hide the suggestion list
    pcgfSuggestionList.css('display', 'none');
    pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').removeClass('selected');
    pcgfLastSelectedIndex = -1;
}

function setSuggestionPosition() {
    // Position the suggestion list under the current line of the user list
    var userListPosition = pcgfUserList.position();
    var currentLine = pcgfUserList.val();
    currentLine = currentLine.substr(0, pcgfUserList.prop('selectionStart')).split('\n').length;
    pcgfSuggestionList.css({
        display: 'inline-block',
        left: userListPosition.left,
        top: userListPosition.top + (currentLine * parseInt(pcgfUserList.css('line-height'))) + 5
    });
}

function setPMName(name) {
    // Replace the current selected line with the new suggested name
    var currentPosition = pcgfUserList.prop('selectionStart');
    var searchValue = pcgfUserList.val();
    var startIndex = searchValue.lastIndexOf('\n', currentPosition - 1) + 1;
    var endIndex = searchValue.indexOf('\n', currentPosition);
    if (endIndex < 0) {
        endIndex = searchValue.length;
    }
    pcgfUserList.val(searchValue.substr(0, startIndex) + name + '\n' + searchValue.substr(endIndex));
    pcgfUserList.prop('selectionStart', startIndex + name.length + 1);
    pcgfUserList.prop('selectionEnd', startIndex + name.length + 1);
    hideSuggestions();
}

$(window).resize(function() {
    // Refresh the position of the suggestion list when the screen resizes
    setSuggestionPosition();
});

pcgfUserList.on('click', function() {
    // Refresh the list when something has been clicked inside the textarea
    pcgfUserList.trigger('keyup');
});

pcgfUserList.on('focusin', function() {
    // Show the suggestion list when the textarea get's focused
    pcgfUserList.trigger('keyup');
});

pcgfUserList.on('focusout', function(e) {
    // Hide the suggestion list when nothing is selected
    if (pcgfLastSelectedIndex > 0) {
        e.preventDefault();
        e.stopPropagation();
        return;
    }
    hideSuggestions();
});

pcgfUserList.on('keydown', function(e) {
    if (pcgfSuggestionList.css('display') !== 'none') {
        pcgfKeyCatched++;
        if (e.which === 13) {
            // Enter selects the current name and replaces the current line of the textarea
            pcgfSuggestionList.trigger('click');
            pcgfKeyCatched = 13;
        } else if (e.which === 27) {
            // Escape closes the current suggestion list
            hideSuggestions();
        } else if (e.which === 38) {
            // Up arrow selects the previous entry of the list
            if (pcgfKeyCatched % 3 === 1) {
                if (pcgfLastSelectedIndex <= 1) {
                    pcgfLastSelectedIndex = pcgfResultCount;
                    pcgfSuggestionList.find('ul > li:nth-child(' + pcgfResultCount + ')').addClass('selected');
                    if (pcgfResultCount > 1) {
                        pcgfSuggestionList.find('ul > li:nth-child(1)').removeClass('selected');
                    }
                } else {
                    pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').removeClass('selected');
                    pcgfLastSelectedIndex--;
                    pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').addClass('selected');
                }
            }
        } else if (e.which === 40) {
            // Down arrow selects the next entry of the list
            if (pcgfKeyCatched % 3 === 1) {
                if (pcgfLastSelectedIndex < 0 || pcgfLastSelectedIndex >= pcgfResultCount) {
                    pcgfLastSelectedIndex = 1;
                    pcgfSuggestionList.find('ul > li:nth-child(1)').addClass('selected');
                    if (pcgfResultCount > 1) {
                        pcgfSuggestionList.find('ul > li:nth-child(' + pcgfResultCount + ')').removeClass('selected');
                    }
                } else {
                    pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').removeClass('selected');
                    pcgfLastSelectedIndex++;
                    pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').addClass('selected');
                }
            }
        } else {
            pcgfKeyCatched = 0;
        }
        if (pcgfKeyCatched > 0) {
            e.preventDefault();
            e.stopPropagation();
        }
    }
});

pcgfUserList.on('keyup', function(e) {
    if (pcgfKeyCatched > 0) {
        pcgfKeyCatched = 0;
        e.preventDefault();
        e.stopPropagation();
        return;
    }
    // Any other key not catched by keydown will lead to a refresh of the list
    var currentPosition = pcgfUserList.prop('selectionStart');
    if (currentPosition !== pcgfUserList.prop('selectionEnd')) {
        // Don't show the suggestion list when multiple characters are selected
        hideSuggestions();
        return;
    }
    var searchValue = pcgfUserList.val();
    var startIndex = searchValue.lastIndexOf('\n', currentPosition - 1) + 1;
    var endIndex = searchValue.indexOf('\n', currentPosition);
    if (endIndex < 0) {
        endIndex = searchValue.length;
    }
    hideSuggestions();
    searchValue = searchValue.substr(startIndex, endIndex - startIndex);
    if (searchValue !== pcgfLastSearchValue) {
        pcgfLastSearchValue = searchValue;
        $.ajax({
            url: pcgfPMNameSuggestionURL, type: 'POST', data: {search: searchValue}, success: function(result) {
                if (searchValue === pcgfLastSearchValue) {
                    //noinspection JSUnresolvedFunction
                    var usernames = pcgfUserList.val().split('\n');
                    var suggestions = '';
                    if (result.length === 0) {
                        // Make the suggestion list invisible if no match could be found
                        pcgfLastSearchValue = '';
                        return;
                    } else {
                        pcgfResultCount = 0;
                        var found;
                        for (var i = 0; i < result.length; i++) {
                            // If name isn't already entered then show it
                            found = false;
                            for (var j = 0; j < usernames.length; j++) {
                                if (result[i].username === usernames[j]) {
                                    found = true;
                                    break;
                                }
                            }
                            if (!found) {
                                pcgfResultCount++;
                                //noinspection JSUnresolvedVariable
                                suggestions += '<li>' + result[i].avatar + result[i].user + '<input type="hidden" class="pcgf-pm-name-suggestion" value="' + result[i].username + '"></li>';
                            }
                        }
                        suggestions = '<ul>' + suggestions + '</ul>';
                    }
                    if (pcgfResultCount > 0) {
                        // Show the result list and refresh it's position
                        pcgfSuggestionList.html(suggestions);
                        pcgfSuggestionList.find('img').each(function() {
                            $(this).css({
                                width: pcgfPMNameSuggestionImageSize + 'px',
                                height: pcgfPMNameSuggestionImageSize + 'px'
                            });
                        });
                        setSuggestionPosition();
                    } else {
                        pcgfLastSearchValue = '';
                    }
                }
            }
        });
    } else if (pcgfLastSearchValue !== '' && pcgfSuggestionList.html() !== '') {
        setSuggestionPosition();
    }
});

pcgfSuggestionList.on('mousemove', 'ul > li', function() {
    // Select the list element where the cursor is above it
    if (pcgfLastSelectedIndex > 0) {
        pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').removeClass('selected');
    }
    pcgfLastSelectedIndex = $(this).index() + 1;
    pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').addClass('selected');

});

pcgfSuggestionList.on('mouseleave', function() {
    // Unselect the last selection of the suggestion
    if (pcgfLastSelectedIndex > 0) {
        pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').removeClass('selected');
    }
    pcgfLastSelectedIndex = -1;
});

pcgfSuggestionList.on('click', function() {
    // Select the name
    if (pcgfLastSelectedIndex > 0) {
        pcgfLastSearchValue = '';
        setPMName(pcgfSuggestionList.find('ul > li:nth-child(' + pcgfLastSelectedIndex + ')').find('.pcgf-pm-name-suggestion').val());
        pcgfUserList.focus();
    }
});

$(document).ready(function() {
    $('#username_list').prop('autocomplete', 'off');
});