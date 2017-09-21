$(document).ready(function(){
		$('.select2').select2();

		$("#code").focus();

		$("#dt").DataTable({
			order : [[0, 'desc']]
		});

		$("form #delete").click(function(e){
				if(!confirm('Are you sure?')){
					e.preventDefault();
					return false;
				}
				return true;
			});

		 $("#quantity").spinner({
	 	stop : function(event, ui){
	 		var qty = this.value;
	 		var price = parseFloat($('#price').val());
	 		total = qty*price;
	 		$('#total').val(total);s
	 		$('#total').css("background-color", "#ffffcc");
	 	}
	 });

		$("#startdate, #enddate").datetimepicker({
			format : 'Y-m-d H:i'
		});

		$("#dob, #joindate").datepicker();

		$('.gridly').gridly({
		 base: 60, // px
		 gutter: 20, // px
		 columns: 12
	 });
  });
