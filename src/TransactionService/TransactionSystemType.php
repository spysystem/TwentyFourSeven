<?php

namespace TwentyFourSeven\TransactionService;

/**
 * Class TransactionSystemType
 *
 * @package TwentyFourSeven\TransactionService
 */
class TransactionSystemType
{
    const __default = 'InvoiceCustomer';
    const InvoiceCustomer = 'InvoiceCustomer';
    const CreditnoteCustomer = 'CreditnoteCustomer';
    const DifferenceOutbound = 'DifferenceOutbound';
    const Disbursment = 'Disbursment';
    const InvoiceSupplier = 'InvoiceSupplier';
    const CreditnoteSupplier = 'CreditnoteSupplier';
    const Payment = 'Payment';
    const DifferenceInbound = 'DifferenceInbound';
    const Miscellaneous = 'Miscellaneous';
    const CashSale = 'CashSale';
    const ReminderFee = 'ReminderFee';
    const ReminderNote = 'ReminderNote';


}
