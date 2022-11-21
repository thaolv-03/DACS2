<div class="col l-3 shop-sidebar-filter">
    <div class="filter-widget">
        <div class="fw-title">
            Danh mục sản phẩm
        </div>
        
        <div class="filter-categories">
            <ul>
                <li class="category-list__item b-b-100">
                    <a href="../category/f97-series/">F97 Series</a>
                </li>
                <li class="category-list__item b-b-100">
                    <a href="../category/f96-series/">F96 Series</a>
                </li>
                <li class="category-list__item b-b-100">
                    <a href="../category/80-series/">80 Series</a>
                </li>
                <li class="category-list__item b-b-100">
                    <a href="../category/f60-series/">F60 Series</a>
                </li>
                <li class="category-list__item b-b-100">
                    <a href="../category/zx75-series/">ZX75 Series</a>
                </li>
                <li class="category-list__item b-b-100">
                    <a href="../category/itxcase/">ITX CASE</a>
                </li>
                <li class="category-list__item b-b-100">
                    <a href="../category/deskmat/">Desk Mat</a>
                </li>
                <li class="category-list__item">
                    <a href="../category/keycaps/">Keycaps</a>
                </li>
            </ul>
        </div>
    
    </div>

    <div class="filter-widget">
        <h4 class="fw-title">Giá</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div
                class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                data-min="0" data-max="10"
                data-min-value="{{str_replace(' ₫', '', request('price_min'))}}"
                data-max-value="{{str_replace(' 000₫', '', request('price_max'))}}"
                >
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>

        <button type="submit" class="filter-btn">Tìm</button>
    </div>
</div>
