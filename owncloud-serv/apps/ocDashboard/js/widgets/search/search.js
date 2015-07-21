var urls = [];

urls[0] = [
        "http://www.google.com/search?q=",
        "http://search.yahoo.com/search?p=",
        "http://www.bing.com/search?q=",
        "https://duckduckgo.com/?q=",
        "http://ask.com/web?q=",
        "http://search.ebay.com/",
        "http://www.amazon.com/s?url=search-alias%3Daps&field-keywords="
    ];
urls[1] = [
        "http://www.google.de/search?q=",
        "http://search.yahoo.de/search?p=",
        "http://www.bing.de/search?q=",
        "https://duckduckgo.com/?q=",
        "http://ask.com/web?sm=adv&advl=de&dm=adv&q=",
        "http://search.ebay.de/",
        "http://www.amazon.de/s?url=search-alias%3Daps&field-keywords="
];


$(document).ready(function() {
    $('#ocDashboard #search input[type="button"]').live("click",function(){
        var engine = $('#ocDashboard #search select.engine').val();
        var lang = $( "#ocDashboard #search input[name='lang']" ).val();
        var keyword = $('#ocDashboard #search input[type="text"].keyword').val();

        var url = urls[lang][engine] + keyword;

        window.open(url,'_blank');
    });
});