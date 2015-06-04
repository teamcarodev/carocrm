<?PHP

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN UA_Contracts
 */
class UA_Contracts_sugar extends Basic
{
    var $new_schema = true;
    var $module_dir = 'UA_Contracts';
    var $object_name = 'UA_Contracts';
    var $table_name = 'ua_contracts';
    var $importable = false;
    var $disable_row_level_security = true; // to ensure that modules created and deployed under CE will continue to function under team security if the instance is upgraded to PRO
    var $id;
    var $name;
    var $date_entered;
    var $date_modified;
    var $modified_user_id;
    var $modified_by_name;
    var $created_by;
    var $created_by_name;
    var $description;
    var $deleted;
    var $created_by_link;
    var $modified_user_link;
    var $assigned_user_id;
    var $assigned_user_name;
    var $assigned_user_link;
    var $status;
    var $reference_code;
    var $account_id;
    var $account_name;
    var $opportunity_id;
    var $opportunity_name;
    var $contract_value;
    var $currency_id;
    var $expiration_notice;
    var $type;
    var $start_date;
    var $end_date;
    var $customer_signed_date;
    var $company_signed_date;

    public function UA_Contracts_sugar()
    {
        parent::Basic();
    }

    public function bean_implements($interface)
    {
        switch ($interface)
        {
            case 'ACL':
                return true;
        }
        return false;
    }

}