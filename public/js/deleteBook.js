/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/deleteBook.js ***!
  \************************************/
$(document).ready(function () {
  $('.delete').click(function () {
    var _this = this;
    Swal.fire({
      title: 'Are you sure?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then(function (result) {
      if (result.isConfirmed) {
        $.ajax({
          method: 'DELETE',
          url: 'books/' + $(_this).data('id')
        }).done(function (response) {
          window.location.reload();
        }).fail(function (response) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
          });
        });
      }
    });
  });
});
/******/ })()
;