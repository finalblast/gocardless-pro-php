<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Resources;

/**
  * 
  */
class User
{

    private $data;
    private $response;

  /**
    * Creates a new Resource from a http response passing in the data.
    * @param stdClass $data Data coming into the resource.
    * @param Response $response \<no value>\Core\Response object.
    */
    public function __construct($data, $response = null)
    {
        // Don't blow up with blank data anymore for raw responses.
        if ($data === null) {
            $data = new \stdClass();
        }
        $this->response = $response;
        $this->data = $data;
    }


  /**
    * Fixed
    * [timestamp](https://developer.gocardless.com/pro/#overview-time-zones-dates),
    * recording when this resource was created.
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
    * Unique email address, used as a username.
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
    * Boolean value showing whether the user is enabled or disabled.
    *
    * @return bool
    */
    public function enabled()
    {
        $field = 'enabled';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }

  /**
    * User's surname. This field may not exceed 100 characters.
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
    * User's given name. This field may not exceed 100 characters.
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
    * Unique identifier, beginning with "US"
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
    * Referenced objects. Key values to stdClasses returned.
    *
    * @return array[string]string
    */
    public function links()
    {
        $field = 'links';
        if (!property_exists($this->data, $field)) {
          return null;
        }
        return $this->data->{$field};
    }



  /**
    * Get the response object.
    * @return \GoCardless\Core\Response
    */
    public function response()
    {
        return $this->response;
    }

  /**
    * Returns a string representation of the project.
    * @return string 
    */
    public function __toString()
    {
        $ret = 'User Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
