<?php
namespace QuickBooksOnline\API\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType IntuitEntity
 * @xmlName IPPPriceLevelPerItem
 * @var IPPPriceLevelPerItem
 * @xmlDefinition 
				Product: QBW
				Description: A custom price or
				percentage change from the item's base price for a specific price
				level
			
 */
class IPPPriceLevelPerItem
	extends IPPIntuitEntity	{

		/**                                                                       
		* Initializes this object, optionally with pre-defined property values    
		*                                                                         
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.                      
		*                                                                         
		* @param array $keyValInitializers key/value pairs to be populated into object's properties 
		* @param boolean $verbose specifies whether object should echo warnings   
		*/                                                                        
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			parent::__construct($keyValInitializers, $verbose);
			
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPPriceLevelPerItem',$initPropName) || property_exists('QuickBooksOnline\API\Data\IPPPriceLevelPerItem',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}

	
	/**
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName ItemRef
	 * @var IPPReferenceType
	 */
	public $ItemRef;
	/**
	 * @Definition 
									Product: QBW
									Description: A specific price for
									the given item.
								
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName CustomPrice
	 * @var float
	 */
	public $CustomPrice;
	/**
	 * @Definition 
									Product: QBW
									Description: Modifies the base
									selling price of the given item by the specified percentage. A
									positive value increases the price, a negative value reduces
									the price.
								
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName CustomPricePercent
	 * @var float
	 */
	public $CustomPricePercent;
	/**
	 * @Definition Internal use only: extension place holder for
								PriceLevelPerItem  
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName PriceLevelPerItemEx
	 * @var IPPIntuitAnyType
	 */
	public $PriceLevelPerItemEx;


} // end class IPPPriceLevelPerItem
