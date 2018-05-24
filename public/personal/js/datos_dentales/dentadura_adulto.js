/******************************************************************************
** .JS para las variables y funciones para seleccion de dentadura adulta ******
******************************************************************************/	

		/*************************************************************
		*************** Dientes superior izquierda *******************
		**************************************************************/

$(document).ready(function(){
	
		//Se inician ocultos los div por defecto  
		$('#TMSDD').hide(); 
		$('#SMSDD').hide();
		$('#PMSDD').hide();
		$('#SPSDD').hide();
		$('#PPSDD').hide();
		$('#CSDD').hide();
		$('#ILSDD').hide();
		$('#ICSDD').hide();

var diente18, diente17, diente16, diente15, diente14, diente13, diente12, diente11, 
	diente21, diente22, diente23, diente24, diente25, diente26, diente27, diente28,
	cont18, cont17, cont16, cont15, cont14, cont13, cont12, cont11,
	cont21, cont22, cont23, cont24, cont25, cont26, cont27, cont28,

		diente18 = $('#diente18').attr('value');
		cont18 = 0;
		$('#diente18').click(function(event) {
			cont18 = cont18 + 1;
			if (cont18 == 1) {
				$('#TMSDD').show();
				$("#TMSD").val(diente18);
				$('#TMSDP').focus();
				$("#path18").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
			}else{
				cont18 = 0;
				$('#TMSDD').hide();
				$("#TMSD").val('');
				$("#TMSDP").val('');
				$("#path18").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
			}
		});  

		diente17 = $('#diente17').attr("value");
		cont17 = 0;
		$('#diente17').click(function(event) {
			cont17 = cont17 + 1;
			if (cont17 == 1) {
				$('#SMSDD').show();
				$("#SMSD").val(diente17);
				$("#SMSDP").focus();
				$("#path17").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
			}else{
				cont17 = 0;
				$('#SMSDD').hide();
				$("#SMSD").val('');
				$("#SMSDP").val('');
				$("#path17").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
			}
		});    

		diente16 = $('#diente16').attr("value");
		cont16 = 0;
		$('#diente16').click(function(event) {
			cont16 = cont16 + 1;
			if (cont16 == 1) {
				$('#PMSDD').show();
   				$("#PMSD").val(diente16);
   				$("#PMSDP").focus();
   				$("#path16").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
			}else{
				cont16 = 0;
				$('#PMSDD').hide();
   				$("#PMSD").val('');
   				$("#PMSDP").val('');
   				$("#path16").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
			}
   		});    

   		diente15 = $('#diente15').attr("value");
   		cont15 = 0;
   		$('#diente15').click(function(event) {
   			cont15 = cont15 + 1;
   			if (cont15 == 1) {
   				$('#SPSDD').show();
   				$("#SPSD").val(diente15);
   				$("#SPSDP").focus();
   				$("#path15").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont15 = 0;
   				$('#SPSDD').hide();
   				$("#SPSD").val('');
   				$("#SPSDP").val('');
   				$("#path15").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		});    

   		diente14 = $('#diente14').attr("value");
   		cont14 = 0;
   		$('#diente14').click(function(event) {
   			cont14 = cont14 + 1;
   			if (cont14 == 1) {
   				$('#PPSDD').show();
   				$("#PPSD").val(diente14);
   				$("#PPSDP").focus();
   				$("#path14").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont14 = 0;
   				$('#PPSDD').hide();
   				$("#PPSD").val('');
   				$("#PPSDP").val('');
   				$("#path14").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		});    

   		diente13 = $('#diente13').attr("value");
   		cont13 = 0;
   		$('#diente13').click(function(event) {
   			cont13 = cont13 + 1;
   			if (cont13 == 1) {
   				$('#CSDD').show();
   				$("#CSD").val(diente13);
   				$("#CSDP").focus();
   				$("#path13").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont13 = 0;
   				$('#CSDD').hide();
   				$("#CSD").val('');
   				$("#CSDP").val('');
   				$("#path13").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		});    

   		diente12 = $('#diente12').attr("value");
   		cont12 = 0;
   		$('#diente12').click(function(event) {
   			cont12 = cont12 +1;
   			if (cont12 == 1) {
   				$('#ILSDD').show();
   				$("#ILSD").val(diente12);	
   				$("#ILSDP").focus();
   				$("#path12").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont12 = 0;
   				$('#ILSDD').hide();
   				$("#ILSD").val('');
   				$("#ILSDP").val('');
   				$("#path12").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		});    

   		diente11 = $('#diente11').attr("value");
   		cont11 = 0;
   		$('#diente11').click(function(event) {
   			cont11 = cont11 + 1;
   			if (cont11 == 1) {
   				$('#ICSDD').show();
   				$("#ICSD").val(diente11);	
   				$("#ICSDP").focus();
   				$("#path11").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont11 = 0;
   				$('#ICSDD').hide();
   				$("#ICSD").val('');
   				$("#ICSDP").val('');
   				$("#path11").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		});    

   		/*************************************************************
		*************** Dientes superior izquierda *******************
		**************************************************************/

		//Se inician ocultos los div por defecto  
		$('#ICSID').hide(); 
		$('#ILSID').hide();
		$('#CSID').hide();
		$('#PPSID').hide();
		$('#SPSID').hide();
		$('#PMSID').hide();
		$('#SMSID').hide();
		$('#TMSID').hide();

		diente21 = $('#diente21').attr("value");
   		cont21 = 0;
   		$('#diente21').click(function(event) {
   			cont21 = cont21 + 1;
   			if (cont21 == 1) {
   				$('#ICSID').show();
   				$("#ICSI").val(diente21);	
   				$("#ICSDP").focus();
   				$("#path21").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont21 = 0;
   				$('#ICSID').hide();
   				$("#ICSI").val('');
   				$("#ICSIP").val('');
   				$("#path21").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente22 = $('#diente22').attr("value");
   		cont22 = 0;
   		$('#diente22').click(function(event) {
   			cont22 = cont22 + 1;
   			if (cont22 == 1) {
   				$('#ILSID').show();
   				$("#ILSI").val(diente22);	
   				$("#ILSIP").focus();
   				$("#path22").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont22 = 0;
   				$('#ILSID').hide();
   				$("#ILSI").val('');
   				$("#ILSIP").val('');
   				$("#path22").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente23 = $('#diente23').attr("value");
   		cont23 = 0;
   		$('#diente23').click(function(event) {
   			cont23 = cont23 + 1;
   			if (cont23 == 1) {
   				$('#CSID').show();
   				$("#CSI").val(diente23);	
   				$("#CSIP").focus();
   				$("#path23").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont23 = 0;
   				$('#CSID').hide();
   				$("#CSI").val('');
   				$("#CSIP").val('');
   				$("#path23").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 
   		
   		diente24 = $('#diente24').attr("value");
   		cont24 = 0;
   		$('#diente24').click(function(event) {
   			cont24 = cont24 + 1;
   			if (cont24 == 1) {
   				$('#PPSID').show();
   				$("#PPSI").val(diente24);	
   				$("#PPSIP").focus();
   				$("#path24").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont24 = 0;
   				$('#PPSID').hide();
   				$("#PPSI").val('');
   				$("#PPSIP").val('');
   				$("#path24").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente25 = $('#diente25').attr("value");
   		cont25 = 0;
   		$('#diente25').click(function(event) {
   			cont25 = cont25 + 1;
   			if (cont25 == 1) {
   				$('#PPSID').show();
   				$("#PPSI").val(diente25);	
   				$("#PPSIP").focus();
   				$("#path25").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont25 = 0;
   				$('#PPSID').hide();
   				$("#PPSI").val('');
   				$("#PPSIP").val('');
   				$("#path25").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente26 = $('#diente26').attr("value");
   		cont26 = 0;
   		$('#diente26').click(function(event) {
   			cont26 = cont26 + 1;
   			if (cont26 == 1) {
   				$('#PMSID').show();
   				$("#PMSI").val(diente26);	
   				$("#PMSIP").focus();
   				$("#path26").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont26 = 0;
   				$('#PMSID').hide();
   				$("#PMSI").val('');
   				$("#PMSIP").val('');
   				$("#path26").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente27 = $('#diente27').attr("value");
   		cont27 = 0;
   		$('#diente27').click(function(event) {
   			cont27 = cont27 + 1;
   			if (cont27 == 1) {
   				$('#SMSID').show();
   				$("#SMSI").val(diente27);	
   				$("#SMSIP").focus();
   				$("#path27").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont27 = 0;
   				$('#SMSID').hide();
   				$("#SMSI").val('');
   				$("#SMSIP").val('');
   				$("#path27").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente28 = $('#diente28').attr("value");
   		cont28 = 0;
   		$('#diente28').click(function(event) {
   			cont28 = cont28 + 1;
   			if (cont28 == 1) {
   				$('#TMSID').show();
   				$("#TMSI").val(diente28);	
   				$("#TMSIP").focus();
   				$("#path28").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont28 = 0;
   				$('#TMSID').hide();
   				$("#TMSI").val('');
   				$("#TMSIP").val('');
   				$("#path28").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 
});