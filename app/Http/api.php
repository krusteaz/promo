<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the API routes for your application as
| the routes are automatically authenticated using the API guard and
| loaded automatically by this application's RouteServiceProvider.
|
*/

Route::group([
    'prefix' => 'api',
    //'middleware' => 'auth:api'
], function () {
	Route::post('user/authenticate','Api\UserController@authenticate');
	Route::resource('user', 'Api\UserController');

	Route::resource('promotions', 'Api\PromotionFeedController');
	Route::resource('promotion', 'Api\PromotionController');
	Route::resource('promotion.proposal', 'Api\ProposalController');

	// This is what I am thinking for the resource value
	Route::resource('proposal.inovoice', 'Api\MarketplaceInvoiceController');

	Route::resource('thread', 'Api\ThreadController');
	Route::resource('payment', 'Api\PaymentController');
	Route::resource('payout', 'Api\PayoutController');
});
