/******************************************************************************
** .JS para las variables y funciones para seleccion de dentadura adulta ******
******************************************************************************/	

		/*************************************************************
		*************** Dientes superior derecha *******************
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

   		/*************************************************************
		*************** Dientes INFERIOR izquierda *******************
		**************************************************************/

		//Se inician ocultos los div por defecto  
		$('#TMIID').hide(); 
		$('#SMIID').hide();
		$('#PMIID').hide();
		$('#SPIID').hide();
		$('#PPIID').hide();
		$('#CIID').hide();
		$('#ILIID').hide();
		$('#ICIID').hide();

		var diente38, diente37, diente36, diente35, diente34, diente33, diente32, diente31, 
			diente41, diente42, diente43, diente44, diente45, diente46, diente47, diente48,
			cont38, cont37, cont36, cont35, cont34, cont33, cont32, cont31,
			cont41, cont42, cont43, cont44, cont45, cont46, cont47, cont48,

		diente38 = $('#diente38').attr("value");
   		cont38 = 0;
   		$('#diente38').click(function(event) {
   			cont38 = cont38 + 1;
   			if (cont38 == 1) {
   				$('#TMIID').show();
   				$("#TMII").val(diente38);	
   				$("#TMIIP").focus();
   				$("#path38").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont38 = 0;
   				$('#TMIID').hide();
   				$("#TMII").val('');
   				$("#TMIIP").val('');
   				$("#path38").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente37 = $('#diente37').attr("value");
   		cont37 = 0;
   		$('#diente37').click(function(event) {
   			cont37 = cont37 + 1;
   			if (cont37 == 1) {
   				$('#SMIID').show();
   				$("#SMII").val(diente37);	
   				$("#SMIIP").focus();
   				$("#path37").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont37 = 0;
   				$('#SMIID').hide();
   				$("#SMII").val('');
   				$("#SMIIP").val('');
   				$("#path37").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente36 = $('#diente36').attr("value");
   		cont36 = 0;
   		$('#diente36').click(function(event) {
   			cont36 = cont36 + 1;
   			if (cont36 == 1) {
   				$('#PMIID').show();
   				$("#PMII").val(diente36);	
   				$("#PMIIP").focus();
   				$("#path36").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont36 = 0;
   				$('#PMIID').hide();
   				$("#PMII").val('');
   				$("#PMIIP").val('');
   				$("#path36").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente35 = $('#diente35').attr("value");
   		cont35 = 0;
   		$('#diente35').click(function(event) {
   			cont35 = cont35 + 1;
   			if (cont35 == 1) {
   				$('#SPIID').show();
   				$("#SPII").val(diente35);	
   				$("#SPIIP").focus();
   				$("#path35").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont35 = 0;
   				$('#SPIID').hide();
   				$("#SPII").val('');
   				$("#SPIIP").val('');
   				$("#path35").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente34 = $('#diente34').attr("value");
   		cont34 = 0;
   		$('#diente34').click(function(event) {
   			cont34 = cont34 + 1;
   			if (cont34 == 1) {
   				$('#PPIID').show();
   				$("#PPII").val(diente34);	
   				$("#PPIIP").focus();
   				$("#path34").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont34 = 0;
   				$('#PPIID').hide();
   				$("#PPII").val('');
   				$("#PPIIP").val('');
   				$("#path34").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente33 = $('#diente33').attr("value");
   		cont33 = 0;
   		$('#diente33').click(function(event) {
   			cont33 = cont33 + 1;
   			if (cont33 == 1) {
   				$('#CIID').show();
   				$("#CII").val(diente33);	
   				$("#CIIP").focus();
   				$("#path33").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont33 = 0;
   				$('#CIID').hide();
   				$("#CII").val('');
   				$("#CIIP").val('');
   				$("#path33").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente32 = $('#diente32').attr("value");
   		cont32 = 0;
   		$('#diente32').click(function(event) {
   			cont32 = cont32 + 1;
   			if (cont32 == 1) {
   				$('#ILIID').show();
   				$("#ILII").val(diente32);	
   				$("#ILIIP").focus();
   				$("#path32").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont32 = 0;
   				$('#ILIID').hide();
   				$("#ILII").val('');
   				$("#ILIIP").val('');
   				$("#path32").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente31 = $('#diente31').attr("value");
   		cont31 = 0;
   		$('#diente31').click(function(event) {
   			cont31 = cont31 + 1;
   			if (cont31 == 1) {
   				$('#ICIID').show();
   				$("#ICII").val(diente31);	
   				$("#ICIIP").focus();
   				$("#path31").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont31 = 0;
   				$('#ICIID').hide();
   				$("#ICII").val('');
   				$("#ICIIP").val('');
   				$("#path31").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		/*************************************************************
		*************** Dientes INFERIOR derecha *******************
		**************************************************************/

		//Se inician ocultos los div por defecto  
		$('#ICIDD').hide(); 
		$('#ILIDD').hide();
		$('#CIDD').hide();
		$('#PPIDD').hide();
		$('#SPIDD').hide();
		$('#PMIDD').hide();
		$('#SMIDD').hide();
		$('#TMIDD').hide();

		diente41 = $('#diente41').attr("value");
   		cont41 = 0;
   		$('#diente41').click(function(event) {
   			cont41 = cont41 + 1;
   			if (cont41 == 1) {
   				$('#ICIDD').show();
   				$("#ICID").val(diente41);	
   				$("#ICIDP").focus();
   				$("#path41").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont41 = 0;
   				$('#ICIDD').hide();
   				$("#ICID").val('');
   				$("#ICIDP").val('');
   				$("#path41").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente42 = $('#diente42').attr("value");
   		cont42 = 0;
   		$('#diente42').click(function(event) {
   			cont42 = cont42 + 1;
   			if (cont42 == 1) {
   				$('#ILIDD').show();
   				$("#ILID").val(diente42);	
   				$("#ILIDP").focus();
   				$("#path42").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont42 = 0;
   				$('#ILIDD').hide();
   				$("#ILID").val('');
   				$("#ILIDP").val('');
   				$("#path42").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente43 = $('#diente43').attr("value");
   		cont43 = 0;
   		$('#diente43').click(function(event) {
   			cont43 = cont43 + 1;
   			if (cont43 == 1) {
   				$('#CIDD').show();
   				$("#CID").val(diente43);	
   				$("#CIDP").focus();
   				$("#path43").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont43 = 0;
   				$('#CIDD').hide();
   				$("#CID").val('');
   				$("#CIDP").val('');
   				$("#path43").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente44 = $('#diente44').attr("value");
   		cont44 = 0;
   		$('#diente44').click(function(event) {
   			cont44 = cont44 + 1;
   			if (cont44 == 1) {
   				$('#PPIDD').show();
   				$("#PPID").val(diente44);	
   				$("#PPIDP").focus();
   				$("#path44").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont44 = 0;
   				$('#PPIDD').hide();
   				$("#PPID").val('');
   				$("#PPIDP").val('');
   				$("#path44").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente45 = $('#diente45').attr("value");
   		cont45 = 0;
   		$('#diente45').click(function(event) {
   			cont45 = cont45 + 1;
   			if (cont45 == 1) {
   				$('#SPIDD').show();
   				$("#SPID").val(diente45);	
   				$("#SPIDP").focus();
   				$("#path45").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont45 = 0;
   				$('#SPIDD').hide();
   				$("#SPID").val('');
   				$("#SPIDP").val('');
   				$("#path45").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente46 = $('#diente46').attr("value");
   		cont46 = 0;
   		$('#diente46').click(function(event) {
   			cont46 = cont46 + 1;
   			if (cont46 == 1) {
   				$('#PMIDD').show();
   				$("#PMID").val(diente46);	
   				$("#PMIDP").focus();
   				$("#path46").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont46 = 0;
   				$('#PMIDD').hide();
   				$("#PMID").val('');
   				$("#PMIDP").val('');
   				$("#path46").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente47 = $('#diente47').attr("value");
   		cont47 = 0;
   		$('#diente47').click(function(event) {
   			cont47 = cont47 + 1;
   			if (cont47 == 1) {
   				$('#SMIDD').show();
   				$("#SMID").val(diente47);	
   				$("#SMIDP").focus();
   				$("#path47").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont47 = 0;
   				$('#SMIDD').hide();
   				$("#SMID").val('');
   				$("#SMIDP").val('');
   				$("#path47").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 

   		diente48 = $('#diente48').attr("value");
   		cont48 = 0;
   		$('#diente48').click(function(event) {
   			cont48 = cont48 + 1;
   			if (cont48 == 1) {
   				$('#TMIDD').show();
   				$("#TMID").val(diente48);	
   				$("#TMIDP").focus();
   				$("#path48").css({"fill":"#17a4da", "stroke":"#BDBDBD","stroke-width":"2-"});
   			}else{
   				cont48 = 0;
   				$('#TMIDD').hide();
   				$("#TMID").val('');
   				$("#TMIDP").val('');
   				$("#path48").css({"fill":"#f6f6f6", "stroke":"#BDBDBD","stroke-width":"0"});
   			}
   		}); 
});