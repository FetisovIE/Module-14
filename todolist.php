<?php

class ToDoListStorage
{
    private $tasks;

    public function __construct($filename = '')
    {
        if (file_exists($filename)) {
            $fileContent = file_get_contents($filename);
            $this->tasks = json_decode($fileContent, true);
        }
    }

    public function createTask($taskName)
    {
        $this->tasks[] = ['title' => $taskName, 'done' => false, 'date' => new \DateTime()];
    }

    public function removeTask($taskNumber)
    {
        unset($this->tasks[$taskNumber]);
    }

    public function taskDone($taskNumber)
    {
        $this->tasks[$taskNumber]['done'] = true;
    }

    public function saveToJSON($fileName)
    {
        $fileContent = json_encode($this->tasks);
        file_put_contents($fileName, $fileContent);
    }

    public function printToDoList()
    {
        foreach ($this->tasks as $key=>$task) {
            echo 'Задача № ' . $key . PHP_EOL;
            echo 'Заголовок: ' . $task['title'] . PHP_EOL;
            echo 'Статус выполнения: ' . $task['done'] ? 'да' . PHP_EOL : 'нет' . PHP_EOL;
            echo 'Дата постановки задачи: ' . $task['date']->format('Y-m-d') . PHP_EOL;
        }
    }
}

$taskList = new ToDoListStorage();
$taskList->createTask('Сделать ДЗ');
$taskList->createTask('Выгулять собаку');
$taskList->saveToJSON('tasks-list.json');

$anotherTaskList = new ToDoListStorage('tasks-list.json');
$taskList->taskDone(0);
$taskList->removeTask(1);
$taskList->printToDoList();