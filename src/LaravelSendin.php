<?php

namespace Danielmlozano\LaravelSendin;

use Danielmlozano\LaravelSendin\Exceptions\SBException;
use SendinBlue\Client\Model\CreateContact;

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
        try {
            return (new LaravelSendin)->accountApi()->getAccount();
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
    }

    /**
     * Static accesor. Returns a getFolders model instance
     *
     * @param int $limit
     * @param int $offset
     * @param string $sort
     * @static
     * @access public
     * @return \SendinBlue\Client\Model\GetFolders
     */
    public static function getFolders(int $limit = 20, int $offset = 0, $sort = "desc")
    {
        try {
            return (new LaravelSendin)->contactsApi()->getFolders($limit, $offset, $sort);
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
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
        try {
            return (new LaravelSendin)->listsApi()->getLists($limit, $offset, $sort);
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
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
        try {
            return (new LaravelSendin)->listsApi()->getList($listId);
        } catch (\Exception $e) {
            throw new SBException($e->getMessage());
        }
    }

    /**
     * Creates a new Contact and adds it to the given lists
     *
     * @param Array $data
     * @static
     * @access public
     * @return void
     */
    public static function createContact(string $email, array $listsIds = [], array $attributes = [])
    {
        try {
            $data = [
                'email' => $email,
                'listIds' => $listsIds,
                'attributes' => (object) $attributes,
            ];
            return (new LaravelSendin)->contactsApi()->createContact(
                new CreateContact($data)
            );
        } catch (\Exception $e) {
            throw new SBException($e->getMessage(), $e->getCode());
        }
    }
}
