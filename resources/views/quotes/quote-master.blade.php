<!-- IMPORTANT NOTE-->
<!--There are step form according to quote_form_id in "categories" table for main category.
Once we get Quote form ID in "getQuoteForm" function, we show the form that is set
in "selectQuoteForm" function. " 'quotes.quote-modal-1' " is one of the form type
design according to type 1. To add new form follow same process. -->
<!-- IMPORTANT NOTE-->


<!-- Quote Form Type Modal 1 start-->
@include('quotes.quote-modal-1')
<!-- Quote Form Type Modal 1 end-->

<script type="text/javascript">
$(".quote-modal-block .quote-modal-step").each(function(e) {
    $(this).hide();
});
</script>

<script type="text/javascript">
function getQuoteForm(value) {
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    })

 var base_url = $('meta[name="_path"]').attr('content');
 var formData = {
        category: value
    }

 $.ajax({
        type: "POST",
        url: base_url+"/get-quote-form",
        data: formData,
        dataType: 'json',
        beforeSend: function() {
            
        },
        complete: function() {
            
        },
        success: function (json) {
           selectQuoteForm(json,value);
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
}
</script>

<script type="text/javascript">
function selectQuoteForm(form_id,category_id){
	if(form_id == 1){
		getQuoteFormType1(category_id);
	}else{
		toastr.error("category is disabled!");
	}
}
</script>


