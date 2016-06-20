(function($){
  $(function(){
    // Github Latest Commit
    if ($('.github-commit').length) { // Checks if widget div exists (Index only)
      $.ajax({
        url: "https://api.github.com/repos/dogfalo/materialize/commits/master",
        dataType: "json",
        success: function (data) {
          var sha = data.sha
          $('.github-commit').find('.sha').html(sha).attr('href', data.html_url);
        }
      });
    }
  });
})(jQuery);
