<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Customer Bank Accounts hold the bank details of a
  *  [customer](https://developer.gocardless.com/pro/#api-endpoints-customers).
  *  They always belong to a
  *  [customer](https://developer.gocardless.com/pro/#api-endpoints-customers),
  *  and may be linked to several Direct Debit
  *  [mandates](https://developer.gocardless.com/pro/#api-endpoints-mandates).
 
  *  *  
  *  Note that customer bank accounts must be unique, and so you will
  *  encounter a `bank_account_exists` error if you try to create a duplicate
  *  bank account. You may wish to handle this by updating the existing record
  *  instead, the ID of which will be provided as links[customer_bank_account]
  *  in the error response.
  */
class CustomerBankAccount extends Base
{
  
  /**
    *  Creates a new bank account object associated to a customer id.
    *  
  
    *   *  There are three different ways to supply bank account details:
    * 
    *  
    *  - [Local
    *  details](https://developer.gocardless.com/pro/#ui-compliance-local-bank-details)

    *     *  
    *  - IBAN
    *  
    *  - [Customer Bank Account
    *  Tokens](https://developer.gocardless.com/pro/#js-flow-create-a-customer-bank-account-token)

    *     *  
    *  For more information on the different fields required in
    *  each country, see [local bank
    *  details](https://developer.gocardless.com/pro/#ui-compliance-local-bank-details).
    *
    *  Example URL: /customer_bank_accounts
    *  @return CustomerBankAccount
    **/
    public function create($options = array())
    {
        return $this->makeRequest('post', '/customer_bank_accounts', $options);
    }

  /**
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your bank accounts.
    *
    *  Example URL: /customer_bank_accounts
    *  @return ListResponse
    **/
    public function do_list($options = array())
    {
        return $this->makeRequest('get', '/customer_bank_accounts', $options);
    }

  /**
    *  Retrieves the details of an existing bank account.
    *
    *  Example URL: /customer_bank_accounts/:identity
    *
    *  @param identity:  Unique identifier, beginning with "BA"
    *  @return CustomerBankAccount
    **/
    public function get($identity, $options = array())
    {
        $path = $this->subUrl('/customer_bank_accounts/:identity', array(
            'identity' => $identity
        ));

        return $this->makeRequest('get', $path, $options);
    }

  /**
    *  Updates a customer bank account object. Only the metadata parameter is
    *  allowed.
    *
    *  Example URL: /customer_bank_accounts/:identity
    *
    *  @param identity:  Unique identifier, beginning with "BA"
    *  @return CustomerBankAccount
    **/
    public function update($identity, $options = array())
    {
        $path = $this->subUrl('/customer_bank_accounts/:identity', array(
            'identity' => $identity
        ));

        return $this->makeRequest('put', $path, $options);
    }

  /**
    *  Immediately cancels all associated mandates and cancellable payments.
   
    *  *  
    *  This will return a `disable_failed` error if the bank account
    *  has already been disabled.
    *  
    *  A disabled bank account can be
    *  re-enabled by creating a new bank account resource with the same details.
    *
    *  Example URL: /customer_bank_accounts/:identity/actions/disable
    *
    *  @param identity:  Unique identifier, beginning with "BA"
    *  @return CustomerBankAccount
    **/
    public function disable($identity, $options = array())
    {
        $path = $this->subUrl('/customer_bank_accounts/:identity/actions/disable', array(
            'identity' => $identity
        ));

        return $this->makeRequest('post', $path, $options);
    }



  /**
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your bank accounts.
    *
    *  Example URL: /customer_bank_accounts\
    *  @return Paginator
    **/
    public function all($listMax, $options = array())
    {
        return new Paginator($this, $listMax, $this->do_list($options), $options);
    }


   /**
    * Get the resource loading class.
    * Used internally to send http requests.
    *
    * @return string
    */
    protected function resourceClass()
    {
        return '\GoCardless\Resources\CustomerBankAccount';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'customer_bank_accounts';
    }
}
