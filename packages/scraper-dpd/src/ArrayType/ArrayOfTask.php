<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTask ArrayType
 */
class ArrayOfTask extends AbstractStructArrayBase
{
    /**
     * The Task
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Task>
     */
    protected ?array $Task = null;

    /**
     * Constructor method for ArrayOfTask
     *
     * @uses ArrayOfTask::setTask()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Task> $task
     */
    public function __construct(?array $task = null)
    {
        $this
            ->setTask($task)
        ;
    }

    /**
     * Get Task value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Task>
     */
    public function getTask(): ?array
    {
        return $this->Task ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTask method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTask method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaskForArrayConstraintFromSetTask(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfTaskTaskItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaskTaskItem instanceof \Scraper\ScraperDPD\StructType\Task) {
                $invalidValues[] = \is_object($arrayOfTaskTaskItem) ? $arrayOfTaskTaskItem::class : sprintf('%s(%s)', \gettype($arrayOfTaskTaskItem), var_export($arrayOfTaskTaskItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Task property can only contain items of type \Scraper\ScraperDPD\StructType\Task, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Task value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Task> $task
     *
     * @throws \InvalidArgumentException
     */
    public function setTask(?array $task = null): self
    {
        // validation for constraint: array
        if ('' !== ($taskArrayErrorMessage = self::validateTaskForArrayConstraintFromSetTask($task))) {
            throw new \InvalidArgumentException($taskArrayErrorMessage, __LINE__);
        }

        if (null === $task || (\is_array($task) && empty($task))) {
            unset($this->Task);
        } else {
            $this->Task = $task;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Task
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @see AbstractStructArrayBase::item()
     *
     * @param int $index
     */
    public function item($index): ?\Scraper\ScraperDPD\StructType\Task
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Task
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Task
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @see AbstractStructArrayBase::offsetGet()
     *
     * @param int $offset
     */
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Task
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Task $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Task) {
            throw new \InvalidArgumentException(sprintf('The Task property can only contain items of type \Scraper\ScraperDPD\StructType\Task, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Task
     */
    public function getAttributeName(): string
    {
        return 'Task';
    }
}
