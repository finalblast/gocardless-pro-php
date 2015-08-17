<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Resources;

/**
  * Customer objects hold the contact details for a customer. A customer can
  * have several [customer bank
  * accounts](#core-endpoints-customer-bank-accounts), which in turn can have
  * several Direct Debit [mandates](#core-endpoints-mandates).
  */
class Customer extends Base
{



  /**
    * The first line of the customer's address.
    *
    * @return string
    */
    public function address_line1()
    {
        $field = 'address_line1';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The second line of the customer's address.
    *
    * @return string
    */
    public function address_line2()
    {
        $field = 'address_line2';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The third line of the customer's address.
    *
    * @return string
    */
    public function address_line3()
    {
        $field = 'address_line3';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The city of the customer's address.
    *
    * @return string
    */
    public function city()
    {
        $field = 'city';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Customer's company name. Required unless a `given_name` and `family_name`
    * are provided.
    *
    * @return string
    */
    public function company_name()
    {
        $field = 'company_name';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO
    * 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
    * alpha-2 code.
    *
    * @return string
    */
    public function country_code()
    {
        $field = 'country_code';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Fixed [timestamp](#overview-time-zones-dates), recording when this
    * resource was created.
    *
    * @return string
    */
    public function created_at()
    {
        $field = 'created_at';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Customer's email address.
    *
    * @return string
    */
    public function email()
    {
        $field = 'email';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Customer's surname. Required unless a `company_name` is provided.
    *
    * @return string
    */
    public function family_name()
    {
        $field = 'family_name';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Customer's first name. Required unless a `company_name` is provided.
    *
    * @return string
    */
    public function given_name()
    {
        $field = 'given_name';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "CU".
    *
    * @return string
    */
    public function id()
    {
        $field = 'id';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO 639-1](http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) code.
    * Used as the language for notification emails sent by GoCardless if your
    * organisation does not send its own (see [compliance
    * requirements](#appendix-compliance-requirements)). Currently only "en",
    * "fr", "de", "pt", "es", "it", "nl" are supported.
    *
    * @return string
    */
    public function language()
    {
        $field = 'language';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Key-value store of custom data. Up to 3 keys are permitted, with key names
    * up to 50 characters and values up to 200 characters.
    *
    * @return Wrapper\NestedObject
    */
    public function metadata()
    {
        $field = 'metadata';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * The customer's postal code.
    *
    * @return string
    */
    public function postal_code()
    {
        $field = 'postal_code';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The customer's address region, county or department.
    *
    * @return string
    */
    public function region()
    {
        $field = 'region';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }


  /**
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'Customer Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
