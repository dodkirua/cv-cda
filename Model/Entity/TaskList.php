<?php

namespace Model\Entity;

use Model\Entity\Job;
use Model\Entity\Task;
class TaskList extends Entity implements Interfaces\EntityInterface{
    private ?Job $job;
    private ?Task $task;

    public function __construct(int $id = null, Job $job = null,Task $task = null)    {
        parent::__construct($id);
        $this->setJob($job)
            ->setTask($task);
    }

    /**
     * get the Job
     * @return \Model\Entity\Job|null
     */
    public function getJob(): ?\Model\Entity\Job    {
        return $this->job;
    }

    /**
     * set the Job
     * @param \Model\Entity\Job|null $job
     * @return TaskList
     */
    public function setJob(?\Model\Entity\Job $job): TaskList    {
        $this->job = $job;
        return $this;
    }

    /**
     * get the Task
     * @return \Model\Entity\Task|null
     */
    public function getTask(): ?\Model\Entity\Task    {
        return $this->task;
    }

    /**
     * set the Task
     * @param \Model\Entity\Task|null $task
     * @return TaskList
     */
    public function setTask(?\Model\Entity\Task $task): TaskList    {
        $this->task = $task;
        return $this;
    }

    public function getAllData(): array    {
        $array['id'] = $this->getId();
        $array['job'] = $this->getJob()->getAllData();
        $array['task'] = $this->getTask()->getAllData();
        return $array;
    }
}