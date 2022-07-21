// Summernote WYSIWYG Editor
$(document).ready(function() {
  $('#summernote').summernote({
    height: 200
  });
}); 

// Select all checkboxes in "View All Posts"
$(document).ready(function () {
  $('#selectAllBoxes').click(function (event) {
    if (this.checked) {
      $('.checkBoxes').each(function () {
        this.checked = true;
      });
    } else {
      $('.checkBoxes').each(function () {
        this.checked = false;
      });
    }
  });
});