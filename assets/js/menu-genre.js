$(function () {
	$('.tombolTambahGenre').on('click', function () {

		$('#formModalLabel').html('Tambah Genre');
		$('.modal-footer button[type=submit]').html('Tambah Genre');

		$('#editGenre').val(null);

	});

	$('.tampilModalGenre').on('click', function () {

		$('#formModalLabel').html('Ubah Genre');
		$('.modal-footer button[type=submit]').html('Ubah Genre');
		$('.modal-body form').attr('action', base_url + 'menu/ubahGenre');

		const id = $(this).data('id');

		$.ajax({
			url: base_url + 'menu/detailGenre',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#editGenre').val(data.nama_genre);
				$('#id').val(data.id);
			}
		});

	});
});
