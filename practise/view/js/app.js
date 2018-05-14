  
$(document).ready(function(){
   //Logic goes here
   var main = $("#main");
 
$('#btngetAccInfo').click(function(){
	 
	 var address = $('#txtAdd').val();
	 
	$.ajax({
   	url: 'http://dcm10.hallo.cloud:3000/api/dimcoin/getAccountInfoByAddress'+address,
   	type: "GET",
   	dataType: 'JSON',
   	success: function(response){
   		main.empty();
   				 var listItem =
   				
   				'<p>'+
   				'<p><b>Address: </b>'+ response.data.account.address +'<p/>' +
   				'<p><b>harvestedBlocks: </b>'+ response.data.account.harvestedBlocks +'<p/>' +
   				'<p><b>Importance: </b>'+ response.data.account.importance +'<p/>' +
   				'<p><b>vestedBalance: </b>'+ response.data.account.vestedBalance +'<p/>' +
				'<p><b>publicKey: </b>'+ response.data.account.publicKey +'<p/>'+
				'</p>'
				;
   				
			
   				
					main.append(listItem);
   		}
   	});
});

	$("#btnAll").click(function (e) {
        e.preventDefault();
        var address = $('#address2').val();
        var output2 = $("#output2");
		
		$.ajax({
            url: 'http://dcm10.hallo.cloud:3000/api/dimcoin/alltransactions/'+address,
            type: 'GET',
            dataType: 'JSON',
            success: function (response) {
                output2.empty();
                console.log(response);
                response.data.map(function (value, i, array) {
                    var count = array.length;
                    var dim_token = value.dim_token;
                    var hash = value.hash;
                    var recipient = value.recipient;
                    var timestamp = value.timestamp;
                    var xem_amount = value.xem_amount;
                    i = i +1;
                    
                    var list = "<p align='justify'>" +
                            "<p align='justify'><b>Transactions: </b>" + i + "<p/>" +
                            "<p align='justify'><b>dim_token: </b>" + dim_token + "<p/>" +
                            "<p align='justify'><li><b>hash: </b>" + hash + "<p/>" +
                            "<p align='justify'><li><b>recipient: </b>" + recipient + "<p/>" +
                            "<p align='justify'><li><b>timestamp: </b>" + timestamp + "<p/>" +
                            "<p align='justify'><li><b>xem_amount: </b>" + xem_amount + "<p/>" +
                            "</p><hr/>";
                    output2.append(list);
                });
            }
        });
    });
});
   





