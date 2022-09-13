<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Providers;

use Henrotaym\LaravelTrustupTaskIoCommon\Package;
use Henrotaym\LaravelTrustupTaskIoCommon\Models\Task;
use Henrotaym\LaravelTrustupTaskIoCommon\Models\User;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\TaskContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Models\UserContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\ShowTaskRequest;
use Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\IndexTaskRequest;
use Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\StoreTaskRequest;
use Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\UpdateTaskRequest;
use Henrotaym\LaravelTrustupTaskIoCommon\Requests\Task\DestroyTaskRequest;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Models\TaskTransformer;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Models\UserTransformer;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\ShowTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\IndexTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\StoreTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\UpdateTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\DestroyTaskRequestContract;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models\TaskTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models\UserTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\ShowTaskRequestTransformer;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\IndexTaskRequestTransformer;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\StoreTaskRequestTransformer;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\UpdateTaskRequestTransformer;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\DestroyTaskRequestTransformer;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\ShowTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\IndexTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\StoreTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\UpdateTaskRequestTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Requests\Task\DestroyTaskRequestTransformerContract;

class LaravelTrustupTaskIoCommonServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }

    protected function addToRegister(): void
    {
        // Models
        $this->app->bind(TaskContract::class, Task::class);
        $this->app->bind(UserContract::class, User::class);

        // Requests
        $this->app->bind(DestroyTaskRequestContract::class, DestroyTaskRequest::class);
        $this->app->bind(IndexTaskRequestContract::class, IndexTaskRequest::class);
        $this->app->bind(ShowTaskRequestContract::class, ShowTaskRequest::class);
        $this->app->bind(StoreTaskRequestContract::class, StoreTaskRequest::class);
        $this->app->bind(UpdateTaskRequestContract::class, UpdateTaskRequest::class);

        // Transformers
        
            // Models 
            $this->app->bind(TaskTransformerContract::class, TaskTransformer::class);
            $this->app->bind(UserTransformerContract::class, UserTransformer::class);
            // Requests
            $this->app->bind(DestroyTaskRequestTransformerContract::class, DestroyTaskRequestTransformer::class);
            $this->app->bind(IndexTaskRequestTransformerContract::class, IndexTaskRequestTransformer::class);
            $this->app->bind(ShowTaskRequestTransformerContract::class, ShowTaskRequestTransformer::class);
            $this->app->bind(StoreTaskRequestTransformerContract::class, StoreTaskRequestTransformer::class);
            $this->app->bind(UpdateTaskRequestTransformerContract::class, UpdateTaskRequestTransformer::class);
    }

    protected function addToBoot(): void
    {
        //
    }
}