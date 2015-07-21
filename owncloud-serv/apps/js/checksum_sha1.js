(function($){
  var checksum_sha1 = {
    init: function() {
      if (typeof FileActions !== 'undefined') {
        FileActions.register(
          'file',
          t('checksum_sha1','checksum'),
          OC.PERMISSION_READ,
          OC.imagePath('core','actions/info'),
          checksum_sha1.check
        );
      };
    },
    check: function(file) {
      dom = this.elem.find('.action[data-action=checksum]');
      if(!dom.hasClass('chcksum-hashed')) {
        dom.html(checksum_sha1.load);
        dom.addClass('checksum_sha1-hashing');
        checksum_sha1.ajax(file);
      } else {
        alert(dom.html());
      }
    },
    load: 'Creating SHA1 checksum <img src="'+OC.imagePath('core','loading.gif')+'">',
    ajax: function(file) {
      var data = {source: file, dir: $('#dir').val()+'/'};
      $.ajax({
      type: 'GET',
      url: OC.filePath('checksums', 'ajax', 'checksum_sha1.php'),
      dataType: 'json',
      data: data,
      async: false,
      success: function(info) {
        dom = $('.checksum_sha1-hashing').first();
        dom.text('SHA1: '+info.data[0]);
        dom.addClass('chcksum-hashed');
        dom.removeClass('checksum_sha1-hashing');
      }
    });
    }
  }
  $(document).ready(checksum_sha1.init);
})(jQuery)
