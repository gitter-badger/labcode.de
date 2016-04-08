// Github Latest Commit
if ($('.github-commit').length) { // Checks if widget div exists (Index only)
  $.ajax({
    url: "https://api.github.com/repos/labcode-de/labcode.de/commits/gh-pages",
    dataType: "json",
    success: function (data) {
      var sha = data.sha,
          date = jQuery.timeago(data.commit.author.date);
      if (window_width < 1120) {
        sha = sha.substring(0,7);
      }
      $('.github-commit').find('.date').html(date);
      $('.github-commit').find('.sha').html(sha).attr('href', data.html_url);
    }
  });
}
