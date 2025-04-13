<?php

use Illuminate\Support\Facades\Route;
use App\Filament\Resources\InvoiceResource;

Route::redirect('/', '/dashboard/login');

Route::get('/invoices/{invoice}/download-pdf', function (App\Models\Invoice $invoice) {
    return InvoiceResource::generateInvoicePdf($invoice);
})->name('invoice.download.pdf');
