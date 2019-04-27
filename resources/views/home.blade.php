@extends('layouts.panel')

@section('content')


    <div class="m-content">

        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
				<span class="m-portlet__head-icon">
					<i class="la la-puzzle-piece"></i>
				</span>
                        <h3 class="m-portlet__head-text">
                            Pricing Table
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-pricing-table-3 m-pricing-table-3--fixed">
                    <div class="m-pricing-table-3__items">
                        <div class="row m-row--no-padding">
                            <div class="m-pricing-table-3__item col-lg-4">
                                <div class="m-pricing-table-3__wrapper">
                                    <h3 class="m-pricing-table-3__title">Basic</h3>
                                    <span class="m-pricing-table-3__price m-pricing-table-3__price--padding">Free</span><br>
                                    <span class="m-pricing-table-3__description">
								<span>Lorem ipsum dolor sit amet adipiscing elit</span><br>
								<span>sed do eiusmod tempors labore et dolore</span><br>
								<span>magna siad enim aliqua</span><br>
							</span>
                                    <div class="m-pricing-table-3__btn">
                                        <button type="button" class="btn m-btn--pill  btn-brand m-btn--wide m-btn--uppercase m-btn--bolder m-btn--lg">Download</button>
                                    </div>
                                </div>
                            </div>
                            <div class="m-pricing-table-3__item m-pricing-table-3__item--focus m--bg-brand col-lg-4">
                                <div class="m-pricing-table-3__wrapper">
                                    <h3 class="m-pricing-table-3__title m--font-light">Professional</h3>
                                    <span class="m-pricing-table-3__price">
								<span class="m-pricing-table-3__label">$</span>
								<span class="m-pricing-table-3__number m--font-light">29</span>
								<span class="m-pricing-table-3__text">/&nbsp;&nbsp;Per Installation</span>
							</span>
                                    <br>
                                    <span class="m-pricing-table-3__description">
								<span>Lorem ipsum dolor sit amet adipiscing elit</span><br>
								<span>sed do eiusmod tempors labore et dolore</span><br>
								<span>magna siad enim aliqua</span><br>
							</span>
                                    <div class="m-pricing-table-3__btn">
                                        <button type="button" class="btn m-btn--pill  btn-light m-btn--label-brand m-btn--wide m-btn--uppercase m-btn--bolder m-btn--lg">Purchase</button>
                                    </div>
                                </div>
                            </div>
                            <div class="m-pricing-table-3__item col-lg-4">
                                <div class="m-pricing-table-3__wrapper">
                                    <h3 class="m-pricing-table-3__title">Extended</h3>
                                    <span class="m-pricing-table-3__price">
								<span class="m-pricing-table-3__label">$</span>
								<span class="m-pricing-table-3__number">99</span>
								<span class="m-pricing-table-3__text">/&nbsp;&nbsp;Per Installation</span>
							</span>
                                    <br>
                                    <span class="m-pricing-table-3__description">
								<span>Lorem ipsum dolor sit amet adipiscing elit</span><br>
								<span>sed do eiusmod tempors labore et dolore</span><br>
								<span>magna siad enim aliqua</span><br>
							</span>
                                    <div class="m-pricing-table-3__btn">
                                        <button type="button" class="btn m-btn--pill  btn-brand m-btn--wide m-btn--uppercase m-btn--bolder m-btn--lg">Purchase</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
