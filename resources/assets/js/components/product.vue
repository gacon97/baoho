var temp = {
props: ['id', 'name', 'price', 'slug', 'image'],
computed:{
link: function()
{
return 'http://baoho.test/product/' + this.id +'/' + this.slug +'/';
},
num: function()
{
return this.$parent.numberFormat(this.price, 0, ',', ',');
}

},
methods:{
addItem: function()
{
this.$emit('add-cart', this.id, this.name, this.price, this.image);
},
numberFormat: function()
{
this.$emit('num-format', this.price, 0, ',', ',');
}
},
template: `
<div class="col-md-4 product-men">
    <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item">
            <img :src="image" alt="" class="pro-image-front">
            <img :src="image" alt="" class="pro-image-back">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    <a :href="link" class="link-product-add-cart">xem ngay
                    </a>
                </div>
            </div>
            <span class="product-new-top">New</span>
        </div>
        <div class="item-info-product ">
            <h4 style="display: block;height: 34px;">
                <a :href="link">@{{ name }}
                </a>
            </h4>
            <div class="info-product-price">
                <span class="item_price" v-text="num"></span><span> vnđ</span>
                <del></del>
            </div>
            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                <form action="" method="post" v-on:submit.prevent="addItem">
                    <fieldset>
                        @csrf
                        <input name="cmd" type="hidden" value="_cart"/>
                        <input name="add" type="hidden" value="1"/>
                        <input :value="id" name="id" type="hidden"/>
                        <input :value="name" name="item_name" type="hidden"/>
                        <input :value="price" name="amount" type="hidden"/>
                        <input name="discount_amount" type="hidden" value="0"/>
                        <input name="currency_code" type="hidden" value="VND"/>
                        <input name="return" type="hidden" value=" "/>
                        <input name="cancel_return" type="hidden" value=" "/>
                        <input class="button" data-target="#exampleModalLong" data-toggle="modal" name="submit" type="submit"
                               value="Thêm vào giỏ hàng"/>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
`,
};