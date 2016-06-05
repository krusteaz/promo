<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketplaceInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketplace_invoices', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('proposal_id')->index();
            $table->string('invoice_to');

            $table->string('provider_id');
            $table->decimal('total')->nullable();
            $table->decimal('tax')->nullable();
            $table->string('card_country')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zip')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('vat_id', 50)->nullable();
            $table->timestamps();

            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('marketplace_invoices');
    }
}
