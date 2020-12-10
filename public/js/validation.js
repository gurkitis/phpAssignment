$(document).ready(function(){
    $('#create').submit(function(){
        var sku = $('#sku').val();
        var name = $('#name').val();
        var price = $('#price').val();
        var type = $('#type').val();
        var size = $('#size').val();
        var weight = $('#weight').val();
        var height = $('#height').val();
        var width = $('#width').val();
        var length = $('#length').val();
        $.ajax({
            type: 'POST',
            url: '/AddController/validate' + type,
            dataType: 'json',
            data: {sku: sku, name: name, price: price, type: type, size: size, weight: weight, height: height, width: width, length: length},
            success : function(data)
            {
                if (data.errors == null)
                {
                    alert('no error');
                    this.submit();
                }
                else
                {
                    alert('error');
                    this.preventDefault();
                }
            }
        });
    });
});