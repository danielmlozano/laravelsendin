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
        return (new LaravelSendin)->_getAccount();
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
        return (new LaravelSendin)->_getLists($limit, $offset, $sort);
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
        return (new LaravelSendin)->_getList($listId);
    }

    /**
     * Returns a getAccount model instance
     *
     * @access private
     * @return \SendinBlue\Client\\Model\GetAccount
     */
    private function _getAccount()
    {
        try {
            return $this->accountApi()->getAccount();
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
    }

    /**
     * Gets a new GetLists model instance
     *
     * @param int $limit
     * @param int $offset
     * @param string $sort
     * @access private
     * @return \SendinBlue\Client\Model\GetLists
     */
    private function _getLists(int $limit, int $offset, $sort = "desc")
    {
        try {
            return $this->listsApi()->getLists($limit, $offset, $sort);
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
    }

    /**
     * Returns a new getList model instance
     *
     * @param int $listId
     * @access private
     * @return \SendinBlue\Client\Model\GetExtendedList
     */
    private function _getList(int $listId)
    {
        try {
            return $this->listsApi()->getList($listId);
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
    }
}
