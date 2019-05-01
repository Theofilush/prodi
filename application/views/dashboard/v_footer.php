</div>
<!-- footer content -->
<footer>
<div class="pull-right">
	2018 - <a href="http://upj.ac.id">Universitas Pembangunan Jaya</a> | All Data Reserved
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
<span id="demo-form2" style="display:none;"></span>
<!-- <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script> -->
<script src="<?php echo base_url() ?>asett/dist/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asett/dist/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/nprogress/nprogress.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!--<script src="<?php echo base_url() ?>asett/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>-->
<script src="<?php echo base_url() ?>asett/plugins/pnotify/dist/pnotify.js"></script>
<script src="<?php echo base_url() ?>asett/plugins//pnotify/dist/pnotify.buttons.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/parsleyjs/dist/parsley.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>asett/dist/js/custom.js"></script>
<script>
/*function cek_bunyi() {
var dropdown = document.getElementById("operasi1");
var current_value = dropdown.options[dropdown.selectedIndex].value;
if (current_value == "sembunyi") {
document.getElementById("akuhidding").style.display = "block";
}
else {
document.getElementById("akuhidding").style.display = "none";
}
};*/
$('.select2_ok').select2({
	placeholder: 'Your NULL value caption',
	allowClear: true
});
$('#kalenderku1').datepicker({
	autoclose: true,
	format: "yyyy-mm-dd",
	orientation: 'auto bottom'
})
$('#kalenderku2').datepicker({
	autoclose: true,
	format: "yyyy-mm-dd",
	orientation: 'auto bottom'
})
function doconfirm()
{
	job=confirm("Are you sure to delete permanently?");
	if(job!=true){
		return false;
	}
}
var functionIsRunning = true;
function DataAdd() {
	win2 = window.open("<?php echo site_url() ?>Pengisian", "", "width=800, height=800, scrollbars, status");
	//var win2 =2
	/*var a=3;
	if (win2.opener != null) {
	//window.location.reload(); //window.parent.location.reload();
	var a=2;
	alert("oooooo: "+a);
	}*/
}
function DataEdit($urlku) {
	win2 = window.open("<?php echo base_url() ?>Edit/index/"+$urlku, "", "width=800, height=800, scrollbars, status");
	if (win2.opener == null) { childWindow.opener = self;window.parent.location.reload(); }
	/*win2.onclose=function(){
	window.location="redirect";
	};*/
	/*if (win2.onclose()) {
	window.opener.location.reload();
	}*/
}
$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
	// Kita sembunyikan dulu untuk loadingnya
	// $("#loading").hide();
	$("#kelompok").change(function(){
		$.ajax({
			type: "POST", // Method pengiriman data bisa dengan GET atau POST
			url: "<?php echo base_url("Pengisian/listPerluasan"); ?>", // Isi dengan url/path file php yang dituju
			data: {id_provinsi : $("#kelompok").val()}, // data yang akan dikirim ke file yang dituju
			dataType: "json",
			beforeSend: function(e) {
				if(e && e.overrideMimeType) {
					e.overrideMimeType("application/json;charset=UTF-8");
				}
			},
			success: function(response){ // Ketika proses pengiriman berhasil
				//$("#loading").hide(); // Sembunyikan loadingnya
				// set isi dari combobox kota
				// lalu munculkan kembali combobox kotanya
				$("#per_dok").html(response.list_perdok).show();
			},
			error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
			}
		});	
	});
	$("#per_dok").change(function(){
	$.ajax({
		type: "POST", // Method pengiriman data bisa dengan GET atau POST
		url: "<?php echo base_url("Pengisian/listKelDok"); ?>", // Isi dengan url/path file php yang dituju
		data: {id_keldok : $("#per_dok").val()}, // data yang akan dikirim ke file yang dituju
		dataType: "json",
		beforeSend: function(e) {
			if(e && e.overrideMimeType) {
				e.overrideMimeType("application/json;charset=UTF-8");
			}
		},
		success: function(response){ // Ketika proses pengiriman berhasil
			//$("#loading").hide(); // Sembunyikan loadingnya
			// set isi dari combobox kota
			// lalu munculkan kembali combobox kotanya
			$("#keldok").html(response.list_keldok).show();
		},
		error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
		}
	});
	});
	$("#keldok").change(function(){
	$.ajax({
		type: "POST", // Method pengiriman data bisa dengan GET atau POST
		url: "<?php echo base_url("Pengisian/listLingDok"); ?>", // Isi dengan url/path file php yang dituju
		data: {id_lingdok : $("#keldok").val()}, // data yang akan dikirim ke file yang dituju
		dataType: "json",
		beforeSend: function(e) {
			if(e && e.overrideMimeType) {
				e.overrideMimeType("application/json;charset=UTF-8");
			}
		},
		success: function(response){ // Ketika proses pengiriman berhasil
			//$("#loading").hide(); // Sembunyikan loadingnya
			// set isi dari combobox kota
			// lalu munculkan kembali combobox kotanya
			$("#lingdok").html(response.list_lingdok).show();
		},
		error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
			alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
		}
	});
	});
});
</script>
</body>
</html>