<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Redirect flows enable you to use GoCardless Pro's secure payment pages to
  *  set up mandates with your customers.
  *  
  *  The overall flow is:
  *  

  *   *  1. You
  *  [create](https://developer.gocardless.com/pro/#create-a-redirect-flow) a
  *  redirect flow for your customer, and redirect them to the returned redirect
  *  url, e.g. `https://pay.gocardless.com/flow/RE123`.
  *  
  *  2. Your
  *  customer supplies their name, email, address, and bank account details, and
  *  submits the form. This securely stores their details, and redirects them
  *  back to your `success_redirect_url` with `redirect_flow_id=RE123` in the
  *  querystring.
  *  
  *  3. You
  *  [complete](https://developer.gocardless.com/pro/#complete-a-redirect-flow)
  *  the redirect flow, which creates a
  *  [customer](https://developer.gocardless.com/pro/#api-endpoints-customers),
  *  [customer bank
  *  account](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-accounts),
  *  and
  *  [mandate](https://developer.gocardless.com/pro/#api-endpoints-mandates),
  *  and returns the ID of the mandate. You may wish to create a
  *  [subscription](https://developer.gocardless.com/pro/#api-endpoints-subscriptions)
  *  or [payment](https://developer.gocardless.com/pro/#api-endpoints-payments)
  *  at this point.
  *  
  *  It is recommended that you link the redirect flow
  *  to your user object as soon as it is created, and attach the created
  *  resources to that user in the complete step.
  *  
  *  Redirect flows
  *  expire 30 minutes after they are first created. You cannot
  *  [complete](https://developer.gocardless.com/pro/#complete-a-redirect-flow)
  *  an expired redirect flow.
  */
class RedirectFlow extends Base
{
  
  /**
    *  Creates a redirect flow object which can then be used to redirect your
    *  customer to the GoCardless Pro hosted payment pages.
    *
    *  Example URL: /redirect_flows
    *  @return RedirectFlow
    **/
    public function create($params = array(), $headers = array())
    {
        return $this->makeRequest('post', '/redirect_flows', $params);
    }

  /**
    *  Returns all details about a single redirect flow
    *
    *  Example URL: /redirect_flows/:identity
    *
    *  @param identity:  Unique identifier, beginning with "RE"
    *  @return RedirectFlow
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = $this->subUrl('/redirect_flows/:identity', array(
            'identity' => $identity
        ));

        return $this->makeRequest('get', $path, $params, $headers);
    }

  /**
    *  This creates a
    *  [customer](https://developer.gocardless.com/pro/#api-endpoints-customers),
    *  [customer bank
    *  account](https://developer.gocardless.com/pro/#api-endpoints-customer-bank-account),
    *  and
    *  [mandate](https://developer.gocardless.com/pro/#api-endpoints-mandates)
    *  using the details supplied by your customer and returns the ID of the
    *  created mandate.
    *  
    *  This will return a
    *  `redirect_flow_incomplete` error if your customer has not yet been
    *  redirected back to your site, and a `redirect_flow_already_completed`
    *  error if your integration has already completed this flow. It will return
    *  a `bad_request` error if the `session_token` differs to the one supplied
    *  when the redirect flow was created.
    *
    *  Example URL: /redirect_flows/:identity/actions/complete
    *
    *  @param identity:  Unique identifier, beginning with "RE"
    *  @return RedirectFlow
    **/
    public function complete($identity, $params = array(), $headers = array())
    {
        $path = $this->subUrl('/redirect_flows/:identity/actions/complete', array(
            'identity' => $identity
        ));

        return $this->makeRequest('post', $path, $params, $headers);
    }




   /**
    * Get the resource loading class.
    * Used internally to send http requests.
    *
    * @return string
    */
    protected function resourceClass()
    {
        return '\GoCardless\Resources\RedirectFlow';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'redirect_flows';
    }
}
