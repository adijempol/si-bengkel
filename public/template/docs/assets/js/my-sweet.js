const flas = $('.flash_data').data('flashdata');
if (flas) {
	Swal.fire({
		title: 'Sparepart',
		text: 'has been ' + flas,
		icon: 'success'
	});
}

const flashData = $('.flash-data').data('flashdata');
		
if (flashData) {
	Swal.fire({
		title: 'Mechanic ',
		text: 'has been ' + flashData,
		icon: 'success'
	});
}

const flashdata = $('.flashData').data('flashdata');
		
if (flashData) {
	Swal.fire({
		title: 'SPK ',
		text: 'has been ' + flashData,
		icon: 'success'
	});
}

//! tombol-hapus
$('.tombol-delete').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure Delete this data?',
		text: "Sparepart has been deleted in system",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Delete'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});

$('.tombol-del').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Are you sure Delete this data?',
		text: "Mechanic has been deleted in system",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Delete'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});


