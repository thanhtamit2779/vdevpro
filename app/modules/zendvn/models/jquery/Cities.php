<?php
namespace Vdevpro\Modules\Zendvn\Models\Jquery ;
use Phalcon\Mvc\Model\Manager as Manager;
class Cities extends \Phalcon\Mvc\Model
{

    public $model ;
    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $order;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("_vdevpro");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'cities';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cities[]|Cities|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Cities|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    
    public function getCities() { 
         $query = \Phalcon\Mvc\Model\Query\Builder() ;
         $result = $query->createBuilder()
                                        ->columns('id, name')
                                        ->from('Cities')
                                        ->getQuery()
                                        ->getSingleResult();
        
//         $params = array(
//             'models'  => 'Cities' ,
//             'columns' => array('id', 'name') ,          
//         ) ;
//         $query = new \Phalcon\Mvc\Model\Query\Builder() ;
//         $result = $query->columns('id, name')
//                         ->from('Cities')
//                         ->getQuery()
//                         ->execute() ;
        return $result;
    }
}
