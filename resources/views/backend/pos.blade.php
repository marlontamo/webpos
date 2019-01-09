@extends ('backend/layouts.main')


@section ('content')

<!-- Delete item confirmation Modal -->
<div class="modal fade" id="deleteItemModal" tabindex="-1" data-backdrop="static">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				Confirmation
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				Are you sure you want to delete this item?
				<input type="hidden" id="recordId"/>
			</div>
			<div class="modal-footer">
				<div class="row row-dense">
					<div class="col-md-12 center">
						<div class="btn-group">
							<button type="button" class="btn btn-info btn-flat" id="btnYes">Yes</button>
						</div>
						&nbsp;&nbsp;&nbsp;
						<div class="btn-group">
							<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="pos">
    <table style="width:100%;" class="layout-table">
        <tr>
            <td style="width: 460px;">
                <div id="pos">
                    <form action="/backend/pos" id="pos-sale-form" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <div class="well well-sm" id="leftdiv">
                            <div id="lefttop" style="margin-bottom:5px;">
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="input-group">
                                        <select name="customer_id" id="spos_customer" data-placeholder="Select Customer" required="required" class="form-control select2" style="width:100%;">
                                            <option value="1">Walk-in Client</option>
                                        </select>
                                        <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                            <a href="#" id="add-customer" class="external" data-toggle="modal" data-target="#myModal"><i class="fa fa-2x fa-plus-circle" id="addIcon"></i></a>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    <input type="text" name="hold_ref" value="" id="hold_ref" class="form-control" placeholder="Reference Note" />
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    <input type="text" name="code" id="add_item" class="form-control" placeholder="Search product by code or name, you can scan barcode too" />
                                </div>
                            </div>
                            <div id="printhead" class="print">
                                <h2><strong>Simple POS</strong></h2>
                                My Shop Lot, Shopping Mall,<br>
                                Post Code, City<br>                                            
                                <p>Date: Thu 27 Apr 2017</p>
                            </div>
                            <div id="print">
                                <div id="list-table-div" class="ps-container" data-ps-id="c830b65b-8d87-677b-19e0-831cfc499a55" style="height: 180px;">
                                    <table id="posTable" class="table table-striped table-condensed table-hover list-table" style="margin:0;">
                                        <thead>
                                            <tr class="success">
                                                <th>Product</th>
                                                <th style="width: 15%;text-align:center;">Price</th>
                                                <th style="width: 15%;text-align:center;">Qty</th>
                                                <th style="width: 20%;text-align:center;">Subtotal</th>
                                                <th style="width: 20px;" class="satu"><i class="fa fa-trash-o"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <div style="clear:both;"></div>
                                <div id="totaldiv">
                                    <table id="totaltbl" class="table table-condensed totals" style="margin-bottom:10px;">
                                        <tbody>
                                            <tr class="info">
                                                <td width="25%">Total Items</td>
                                                <td class="text-right" style="padding-right:10px;"><span id="count">0</span></td>
                                                <td width="25%">Total</td>
                                                <td class="text-right" colspan="2"><span id="total">0</span></td>
                                            </tr>
                                            <tr class="info">
                                                <td width="25%"><a href="#" id="add_discount">Discount</a></td>
                                                <td class="text-right" style="padding-right:10px;"><span id="ds_con">0</span></td>
                                                <td width="25%"><a href="#" id="add_tax">Order Tax</a></td>
                                                <td class="text-right"><span id="ts_con">0</span></td>
                                            </tr>
                                            <tr class="success">
                                                <td colspan="2" style="font-weight:bold;">
                                                    Total Payable                                                                <a role="button" data-toggle="modal" data-target="#noteModal">
                                                        <i class="fa fa-comment"></i>
                                                    </a>
                                                </td>
                                                <td class="text-right" colspan="2" style="font-weight:bold;"><span id="total-payable">0</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="botbuttons" class="col-xs-12 text-center">
                                <div class="row">
                                    <div class="col-xs-4" style="padding: 0;">
                                        <div class="btn-group-vertical btn-block">
                                            <input type="submit" class="btn btn-warning btn-block btn-flat"
                                            value="Hold" name="hold">
                                            <button type="button" class="btn btn-danger btn-block btn-flat"
                                            id="reset">Cancel</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-4" style="padding: 0 5px;">
                                        <div class="btn-group-vertical btn-block">
                                            <button type="button" class="btn bg-purple btn-block btn-flat" id="print_order">Print Order</button>

                                            <button type="button" class="btn bg-navy btn-block btn-flat" id="print_bill">Print Bill</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-4" style="padding: 0;">
                                        <button type="button" class="btn btn-success btn-block btn-flat" id="payment" style="height:67px;">Payment</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <span id="hidesuspend"></span>
                            <input type="hidden" name="spos_note" value="" id="spos_note">
                            <div id="payment-con">
                                <input type="hidden" name="amount" id="amount_val" value=""/>
                                <input type="hidden" name="balance_amount" id="balance_val" value=""/>
                                <input type="hidden" name="paid_by" id="paid_by_val" value="cash"/>
                                <input type="hidden" name="cc_no" id="cc_no_val" value=""/>
                                <input type="hidden" name="paying_gift_card_no" id="paying_gift_card_no_val" value=""/>
                                <input type="hidden" name="cc_holder" id="cc_holder_val" value=""/>
                                <input type="hidden" name="cheque_no" id="cheque_no_val" value=""/>
                                <input type="hidden" name="cc_month" id="cc_month_val" value=""/>
                                <input type="hidden" name="cc_year" id="cc_year_val" value=""/>
                                <input type="hidden" name="cc_type" id="cc_type_val" value=""/>
                                <input type="hidden" name="cc_cvv2" id="cc_cvv2_val" value=""/>
                                <input type="hidden" name="balance" id="balance_val" value=""/>
                                <input type="hidden" name="payment_note" id="payment_note_val" value=""/>
                            </div>
                            <input type="hidden" name="customer" id="customer" value="3" />
                            <input type="hidden" name="order_tax" id="tax_val" value="" />
                            <input type="hidden" name="order_discount" id="discount_val" value="" />
                            <input type="hidden" name="count" id="total_item" value="" />
                            <input type="hidden" name="did" id="is_delete" value="0" />
                            <input type="hidden" name="eid" id="is_delete" value="0" />
                            <input type="hidden" name="total_items" id="total_items" value="0" />
                            <input type="hidden" name="total_quantity" id="total_quantity" value="0" />
                            <input type="submit" id="submit" value="Submit Sale" style="display: none;" />
                        </div>
                    </form>                                
                </div>
            </td>
            <td>
                <div class="contents" id="right-col">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td class="col-md-10">
                                    <strong>Product Description</strong>
                                </td>
                                <td class="col-md-2">
                                    <strong>Price</strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)

                            <tr class="product" data-id="{{ $product->product_code }}" data-label="{{ $product->product_name }}" data-price="{{ $product->product_price }}">
                                <td>
                                    {{ $product->product_description }}
                                </td>
                                <td class="text-right">
                                    {{ $product->product_price }}
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!--<div class="contents" id="right-col">
                    <div id="item-list">
                        <div class="items">
                            <div>
                                <button type="button" id="item2" type="button" value='item2' class="btn btn-both btn-flat product">
                                    <span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item2.png" alt="Biogesic" style="width: 100px; height: 100px;"></span><span><span>Biogesic</span></span></button><button type="button" data-name="Bioflu" id="product-0102" type="button" value='TOY02' class="btn btn-both btn-flat product"><span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item3.png" alt="Bioflu" style="width: 100px; height: 100px;"></span><span><span>Bioflu</span></span></button>
                                <button type="button" data-name="Minion Hi" id="product-0101" type="button" value='TOY01' class="btn btn-both btn-flat product">
                                    <span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item4.png" alt="Minion Hi" style="width: 100px; height: 100px;"></span><span><span>Minion Hi</span></span></button>
                                <button type="button" data-name="Minion Banana" id="product-0102" type="button" value='TOY02' class="btn btn-both btn-flat product"><span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item1.png" alt="Alaxan" style="width: 100px; height: 100px;"></span><span><span>Alaxan</span></span></button>
                                <button type="button" data-name="Minion Hi" id="product-0101" type="button" value='TOY01' class="btn btn-both btn-flat product">
                                    <span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item5.png" alt="Minion Hi" style="width: 100px; height: 100px;"></span><span><span>Minion Hi</span></span></button>
                                <button type="button" data-name="Minion Banana" id="product-0102" type="button" value='TOY02' class="btn btn-both btn-flat product"><span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item6.png" alt="Minion Banana" style="width: 100px; height: 100px;"></span><span><span>Minion Banana</span></span></button>
                                <button type="button" data-name="Minion Hi" id="product-0101" type="button" value='TOY01' class="btn btn-both btn-flat product">
                                    <span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item7.png" alt="Minion Hi" style="width: 100px; height: 100px;"></span><span><span>Minion Hi</span></span></button>
                                <button type="button" data-name="Minion Banana" id="product-0102" type="button" value='TOY02' class="btn btn-both btn-flat product"><span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item8.png" alt="Minion Banana" style="width: 100px; height: 100px;"></span><span><span>Minion Banana</span></span></button>
                                <button type="button" data-name="Minion Hi" id="product-0101" type="button" value='TOY01' class="btn btn-both btn-flat product">
                                    <span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item9.png" alt="Minion Hi" style="width: 100px; height: 100px;"></span><span><span>Minion Hi</span></span></button>
                                <button type="button" data-name="Minion Banana" id="product-0102" type="button" value='TOY02' class="btn btn-both btn-flat product"><span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item10.png" alt="Minion Banana" style="width: 100px; height: 100px;"></span><span><span>Minion Banana</span></span></button>
                                <button type="button" data-name="Minion Hi" id="product-0101" type="button" value='TOY01' class="btn btn-both btn-flat product">
                                    <span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item11.png" alt="Minion Hi" style="width: 100px; height: 100px;"></span><span><span>Minion Hi</span></span></button>
                                <button type="button" data-name="Minion Banana" id="product-0102" type="button" value='TOY02' class="btn btn-both btn-flat product"><span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item10.png" alt="Minion Banana" style="width: 100px; height: 100px;"></span><span><span>Minion Banana</span></span></button>
                                <button type="button" data-name="Minion Banana" id="product-0102" type="button" value='TOY02' class="btn btn-both btn-flat product">
                                    <span class="bg-img"><img src="http://localhost/web-pos/storage/upload_img/item10.png" alt="Minion Banana" style="width: 100px; height: 100px;"></span>
                                    <span><span>Minion Banana</span></span>
                                </button>
                            </div>                                       
                        </div>
                    </div>
                    <div class="product-nav">
                        <div class="btn-group btn-group-justified">
                            <div class="btn-group">
                                <button style="z-index:10002;" class="btn btn-warning pos-tip btn-flat" type="button" id="previous"><i class="fa fa-chevron-left"></i></button>
                        
                            </div>
                            <div class="btn-group">
                                <button style="z-index:10003;" class="btn btn-success pos-tip btn-flat" type="button" id="sellGiftCard">&nbsp;</button>
                            </div>
                            <div class="btn-group">
                                <button style="z-index:10004;" class="btn btn-warning pos-tip btn-flat" type="button" id="next"><i class="fa fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>-->
            </td>
        </tr>
    </table>

</div>

@endsection