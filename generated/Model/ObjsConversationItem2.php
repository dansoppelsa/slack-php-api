<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsConversationItem2 extends \ArrayObject
{
    /**
     * @var int
     */
    protected $created;
    /**
     * @var bool
     */
    protected $hasPins;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isExtShared;
    /**
     * @var bool
     */
    protected $isIm;
    /**
     * @var bool
     */
    protected $isOpen;
    /**
     * @var bool
     */
    protected $isOrgShared;
    /**
     * @var bool
     */
    protected $isShared;
    /**
     * @var bool
     */
    protected $isUserDeleted;
    /**
     * @var float|string
     */
    protected $lastRead;
    /**
     * @var mixed
     */
    protected $latest;
    /**
     * @var float
     */
    protected $priority;
    /**
     * @var int
     */
    protected $unreadCount;
    /**
     * @var int
     */
    protected $unreadCountDisplay;
    /**
     * @var string
     */
    protected $user;

    /**
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasPins(): ?bool
    {
        return $this->hasPins;
    }

    /**
     * @param bool $hasPins
     *
     * @return self
     */
    public function setHasPins(?bool $hasPins): self
    {
        $this->hasPins = $hasPins;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsExtShared(): ?bool
    {
        return $this->isExtShared;
    }

    /**
     * @param bool $isExtShared
     *
     * @return self
     */
    public function setIsExtShared(?bool $isExtShared): self
    {
        $this->isExtShared = $isExtShared;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsIm(): ?bool
    {
        return $this->isIm;
    }

    /**
     * @param bool $isIm
     *
     * @return self
     */
    public function setIsIm(?bool $isIm): self
    {
        $this->isIm = $isIm;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    /**
     * @param bool $isOpen
     *
     * @return self
     */
    public function setIsOpen(?bool $isOpen): self
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOrgShared(): ?bool
    {
        return $this->isOrgShared;
    }

    /**
     * @param bool $isOrgShared
     *
     * @return self
     */
    public function setIsOrgShared(?bool $isOrgShared): self
    {
        $this->isOrgShared = $isOrgShared;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    /**
     * @param bool $isShared
     *
     * @return self
     */
    public function setIsShared(?bool $isShared): self
    {
        $this->isShared = $isShared;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsUserDeleted(): ?bool
    {
        return $this->isUserDeleted;
    }

    /**
     * @param bool $isUserDeleted
     *
     * @return self
     */
    public function setIsUserDeleted(?bool $isUserDeleted): self
    {
        $this->isUserDeleted = $isUserDeleted;

        return $this;
    }

    /**
     * @return float|string
     */
    public function getLastRead()
    {
        return $this->lastRead;
    }

    /**
     * @param float|string $lastRead
     *
     * @return self
     */
    public function setLastRead($lastRead): self
    {
        $this->lastRead = $lastRead;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param mixed $latest
     *
     * @return self
     */
    public function setLatest($latest): self
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriority(): ?float
    {
        return $this->priority;
    }

    /**
     * @param float $priority
     *
     * @return self
     */
    public function setPriority(?float $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnreadCount(): ?int
    {
        return $this->unreadCount;
    }

    /**
     * @param int $unreadCount
     *
     * @return self
     */
    public function setUnreadCount(?int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnreadCountDisplay(): ?int
    {
        return $this->unreadCountDisplay;
    }

    /**
     * @param int $unreadCountDisplay
     *
     * @return self
     */
    public function setUnreadCountDisplay(?int $unreadCountDisplay): self
    {
        $this->unreadCountDisplay = $unreadCountDisplay;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}