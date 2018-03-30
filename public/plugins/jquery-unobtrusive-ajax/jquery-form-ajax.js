$(function(){
    $(document).on("submit","form[data-ajax=true]",function(evt){
        evt.preventDefault();

        asyncRequest(this, {
            url: this.action,
            type: this.method || "GET",
            data: $(this).serializeArray()
        });
    });
})