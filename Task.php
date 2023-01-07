<?php
class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private array $comments;
    private User $user;
    public function __construct(User $user, string $task, int $priority)
    {
        $this->user = $user;
        $this->description = $task;
        $this->dateCreated = new DateTime();
        $this->priority = $priority;
    }

    public function setDescription(string $_text)
    {
        $this->description = $_text;
        $this->dateUpdated = new DateTime();
    }

    public function markAsDone()
    {
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
        $this->isDone = true;
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }


    public function setComments(array $comment): void
    {
        $this->comments[] = $comment;
    }
}
