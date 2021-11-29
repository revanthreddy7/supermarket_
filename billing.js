console.log("eio");
// barcode.addEventListener('input', inputHandler);
$(document).ready(function(){
  var tv=0;var b=0;
  // $("#tamt").hide();
  // $("#barcode").on("input", function(){
  //       // Print entered value in a div box
  //       $("#tamt").text($(this).val());
  //       var a=  $("#tamt").text();
  //       console.log(a);

  // });
  // $("#payable").hide();
  $("#addbtn").click(function(){
      $("#ams").hide();
      $("#amc").hide();
      var barcode=$("#barcode").val();
      var quan=$("#quan").val();
      var cemail=$("#cemail").val();
      tv=quan;
      if(barcode==null || (!barcode.trim()==true))
      {
        alert("Enter barcode");
      }
      if(quan==null || (!quan.trim()==true)){quan=1;}
      if(cemail==null)alert("Email required");
      console.log(barcode);
      $.ajax({
        method: "post",
        url: "productbilling.php",
        data: {
          barcode: barcode,
          quan: quan,
          cemail:cemail
        },
        success: function(response)
        {
          var info=JSON.parse(JSON.stringify(response));
          var name=info[0].name;
          var price=info[0].price;
          var sgst=info[0].sgst;
          var cgst=info[0].cgst;
          sgst=parseFloat(sgst).toFixed(2);
          cgst=parseFloat(cgst).toFixed(2);
          console.log(sgst,cgst);
          price=parseFloat(price).toFixed(2);
          // price=price.toFixed(2);
          price=parseFloat(price).toFixed(2);
          var amount=tv*price;
          amount=amount.toFixed(2);
          var amsgst=((sgst/100)*amount).toFixed(2);
          var amcgst=((cgst/100)*amount).toFixed(2);
          console.log(amsgst,amcgst);

          // console.log(price+amount);
          var markup = "<tr id='temp'><td>"+name+"</td><td>"+quan+"</td><td>"+price+"</td><td id='total'>"+amount+"</td><td id='ams'>"+amsgst+"</td><td id='amc'>"+amcgst+"</td></tr>";
          $("table tbody").append(markup);
          // $("#ams").hide();
          // $("#amc").hide();
          var TotalValue=0;var sum=0;var a=0;var c=0;
          // TotalValue=parseFloat(TotalValue);
          // TotalValue=parseFloat(TotalValue).toFixed(2);
          $("tr #total").each(function(index,value){
            currentRow = parseFloat($(this).text());
            TotalValue += currentRow;
            console.log(TotalValue);
            b=parseFloat(b);
            b=TotalValue.toFixed(2);
            console.log(jQuery.type(b));
            $("#tamt").html("<span style='text-align:center;'>Core Total: &#8377;"+b+"</span>");
            sum=parseFloat(sum);
            b=parseFloat(b);
            sum=sum+b;
            console.log(sum);
            console.log(jQuery.type(sum));
            $("#payable").show();
          });
          var sgstvalue=0;
          $("tr #ams").each(function(index,value){
            currentRow = parseFloat($(this).text());
            sgstvalue += currentRow;
            console.log(sgstvalue);
            b=sgstvalue.toFixed(2);
            b=parseFloat(b);
            b=b.toFixed(2);
            console.log(b,jQuery.type(b));
            $("#sgst").html("<span style='text-align:center;'>SGST: &#8377;"+b+"</span>");
            sum=parseFloat(sum);
            b=parseFloat(b);
            sum=sum+b;
            console.log(sum);
            console.log(sum);
          });
          var cgstvalue=0;
          $("tr #amc").each(function(index,value){
            currentRow = parseFloat($(this).text());
            cgstvalue += currentRow;
            console.log(cgstvalue);
            b=cgstvalue.toFixed(2);
            $("#cgst").html("<span style='text-align:center;'>CGST: &#8377;"+b+"</span>");
            sum=parseFloat(sum);
            b=parseFloat(b);
            sum=(sum+b).toFixed(2);
            console.log(sum);
            console.log(sum);
          });
          $("#pay").html("<span style='text-align:center;background-color:#32a852;'>Grand Total: &#8377;"+sum+"</span>");
          $("#msg").html(response);
          // $("#ams").hide();
          // $("#amc").hide();

        }

      })


      // $("#addnew").attr('disabled',true);
      // console.log(factor);
  });
  $("#generate").click(function(){
    window.open('pdfbill.php','_blank');

  });
  // $("#tamt").show();
  // var a=$("#tamt").text();
  // var e=$("#sgst").text();
  // var c=$("#cgst").text();
  // a=parseFloat(a).toFixed(2);
  // b=parseFloat(b).toFixed(2);
  // c=parseFloat(c).toFixed(2);
  // var d=parseFloat(a+e+c).toFixed(2);
  // console.log(sum);
  // $("#billtable").on("click", "#view", function() {
  //    console.log("view");
  //    var currentrow=$(this).closest("tr");
  //    var data1 = currentrow.find("td:eq(0)");
  //    var data2 = currentrow.find("td:eq(1)");
  //    var data3= currentrow.find("td:eq(2)");
  //    var d1=data1.text();
  //    var d2=data2.text();
  //    var d3=(data3.text());
  //    console.log(d1,d2,d3);
  //    // var inv=need3;
  //     $.ajax({
  //       method: "post",
  //       url: "productsupdateinfo.php",
  //       data: {
  //         sname: d1,
  //         inv: d2,
  //         gtotal: d3
  //       },
  //       success: function(response){
  //       $("#popup").show();
  //       $("#popup").html(response);
  //       setTimeout(function() {
  //          $( "#popup" ).hide();
  //        }, 2000);
  //        window.open('pdfpractice.php','_blank');
  //      }
  //     })
  // });





  });
