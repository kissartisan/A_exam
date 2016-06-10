$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$('.modal-trigger').leanModal();

	$(".messageBlock").fadeIn().delay(3000).slideToggle("fast");
	$(".button-collapse").sideNav();

	var categoryId = 0;
	var categoryElement = null;

	$('.categories').find('.editCategory').on('click', function(event) {
		event.preventDefault();

		categoryElement = event.target.parentNode.parentNode.childNodes[3];
		var categoryName = event.target.parentNode.parentNode.childNodes[3].textContent;
		console.log(categoryName);

		categoryId = event.target.parentNode.parentNode.childNodes[1].textContent;
		console.log(categoryId);

		$("#edit_category_name").val(categoryName);
		$('#editModal').openModal();
	});
});

$("modal_save_categories").on('click', function() {
	$.ajax({
		method: 'POST',
		url: urlEdit,
		data: {
			category_name: $('#edit_category_name').val(),
			categoryId: categoryId,
			_token: token,
		}
	})
	.done(function(msg) {
		$(categoryElement).text(msg.new_category);
		$("#editModal").closeModal();
	});
});