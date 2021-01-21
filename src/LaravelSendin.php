<?php

namespace Danielmlozano\LaravelSendin;

use Danielmlozano\LaravelSendin\Exceptions\SBException;

class LaravelSendin extends Api
{
    /**
     * Static accesor. Returns a getAccount model instance
     *
     * @static
     * @access public
     * @return \SendinBlue\Client\Api\AccountApi
     */
    public static function getAccount()
    {
        return (new LaravelSendin)->accountApi()->getAccount();
    }

    public static function getFolders(int $limit = 20, int $offset = 0, $sort = "desc")
    {
        return (new LaravelSendin)->contactsApi()->getFolders($limit, $offset, $sort);
    }


    /**
     * Static accesor. Returns a getLists model instance
     *
     * @param int $limit
     * @param int $offset
     * @param string $sort
     * @static
     * @access public
     * @return \SendinBlue\Client\Model\GetLists
     */
    public static function getLists(int $limit = 20, int $offset = 0, $sort = "desc")
    {
        return (new LaravelSendin)->listsApi()->getLists($limit, $offset, $sort);
    }

    /**
     * Static accesor. Returns a getList model instance
     *
     * @param int $listId
     * @static
     * @access public
     * @return \SendinBlue\Client\Model\GetList
     */
    public static function getList(int $listId)
    {
        return (new LaravelSendin)->listsApi()->getList($listId);
    }
}
