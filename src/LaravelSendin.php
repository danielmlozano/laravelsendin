<?php

namespace Danielmlozano\LaravelSendin;

use Danielmlozano\LaravelSendin\Exceptions\SBException;

class LaravelSendin extends Api
{
    public static function getAccount()
    {
        return (new LaravelSendin)->_getAccount();
    }

    /**
     * Returns a getAccount model instance
     *
     * @access private
     * @return \SendinBlue\Client\\Model\GetAccount
     */
    public function _getAccount()
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
    public function _getLists(int $limit, int $offset, $sort = "desc")
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
    public function _getList(int $listId)
    {
        try {
            return $this->listsApi()->getList($listId);
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
    }
}
