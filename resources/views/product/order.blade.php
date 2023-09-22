<form class="modal-content needs-validation" onsubmit="return inform();" style="color:black">
    @csrf   
    <div class="modal-header">
        <h5 class="modal-title" id="backDropModalTitle"><i class='bx bx-user-plus' ></i>Place Order</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
    </div>
    <div class="modal-body">
        <h1><span id="prodName"></span></h1>
        <div class="mb-3">
            <input hidden  type="number" class="form-control" id="id">
            <input hidden type="number" class="form-control" id="price">
            <input hidden type="text" class="form-control" id="unit">
            <input hidden type="number" class="form-control" id="isDecimal">
            <input hidden type="number" class="form-control" id="qty">
        </div>
        <div class="mb-3">
            <label for="Quantity" onkeypress="return isNumb(event)" class="form-label">Quantity: </label>
            <input type="number" class="form-control" id="Quantity">
            
        </div>
        <div class="mb-3">
            <label for="Contact" class="form-label">Contact Number</label>
            <input type="number" class="form-control" id="Contact">
        </div>
        <div class="mb-3">
            <label for="tprice" class="form-label">Total Price</label>
            <input type="number" class="form-control" id="tprice" disable>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="mdClose">Close</button>
        <button type="submit" class="btn btn-outline-danger" value="submit">Place Order</button>
    </div>
</form>

<script>
        $(document).ready(function () {    
           $('#Quantity').keypress(function (e) {    
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9]/g) && $('#isDecimal').val()== 0)    
                    return false;
                if (String.fromCharCode(charCode).match(/[^0-9]\./g) && $('#isDecimal').val()== 1)    
                    return false;   
                
            });

            $('#Quantity').change(function () { 
                $('#tprice').val($('#Quantity').val() * $('#price').val());
            });
            
            

            $('#Contact').keypress(function (e) {    
    
                var charCode = (e.which) ? e.which : event.keyCode    
    
                if (String.fromCharCode(charCode).match(/[^0-9]/g))    
    
                    return false;                        
    
            });    
    
        });   
   

    function inform(){
        $('#mdClose').click();
         var form = {
            _token: $('input[name=_token]').val(),
            prod_id: $('#id').val(),
            qty: $('#Quantity').val(),
            price : $('#tprice').val(),
            contact : $('#Contact').val(),
            ajax: 1
         }
            $.ajax({
	         url : "{{route('orders.store')}}",
	         data :  form,
	         type : "POST",
	         success : function(msg){
                
                if(msg['success']){
                    Swal.fire(
                        'Success',
                        msg['message'],
                        'success'
                    )
                    setTimeout(function(){window.location.reload();},1500);
                }else{
                    Swal.fire({
                        title: 'Error!',
                        text: msg['message'],
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                }
             }
        })
        return false;
    }
</script>


