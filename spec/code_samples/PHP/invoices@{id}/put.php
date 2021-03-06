$invoiceForm = new Rebilly\Entities\Invoice();
$invoiceForm->setCustomerId('customerId');
$invoiceForm->setWebsiteId('websiteId');
$invoiceForm->setCurrency('USD');

try {
    $invoice = $client->invoices()->update('invoiceId', $invoiceForm);
} catch (UnprocessableEntityException $e) {
    echo $e->getMessage();
}
