{if $blockId}
{literal}
<script type="text/javascript">
function init_postcodeat_contact_form() {
    var addressBlocks = cj('.crm-edit-address-block');
    addressBlocks.each(function(index, item) {
        var block = cj(item).attr('id').replace('Address_Block_', '');
        var addressTableId = 'table#address_'+block; //name of address table if 4.4
        //the id of the address table is renamed in 4.5
        //so also check the address table id for version 4.5
        if (cj(addressTableId).length <= 0) {
            addressTableId = 'table#address_table_'+block;
        }
        postcodeat_init_addressBlock(block, addressTableId);
    });
}

function reset_postcodeat_contact_form() {
    postcodeat_reset();
}

cj(function() {
    reset_postcodeat_contact_form();
    init_postcodeat_contact_form();
});

</script>
{/literal}
{/if}