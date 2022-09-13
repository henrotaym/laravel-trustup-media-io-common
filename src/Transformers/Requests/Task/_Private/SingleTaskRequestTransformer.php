<?php
namespace Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\_Private;

use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Requests\Task\_Private\SingleTaskRequestContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Contracts\Transformers\Models\TaskTransformerContract;
use Henrotaym\LaravelTrustupTaskIoCommon\Transformers\Requests\Task\Traits\IsTaskRequestTransformer;

abstract class SingleTaskRequestTransformer
{
    protected TaskTransformerContract $taskTransformer;

    use IsTaskRequestTransformer {
        setRequestCommonAttributes as parentSetRequestCommonAttributes;
        setArrayCommonAttributes as parentSetArrayCommonAttributes;
    }

    public function __construct(
        TaskTransformerContract $taskTransformer
    ) {
        $this->taskTransformer = $taskTransformer;
    }

    public function setRequestFromAttributes(SingleTaskRequestContract $request, array $attributes): SingleTaskRequestContract
    {
        /** @var SingleTaskRequestContract */
        $request = $this->parentSetRequestCommonAttributes($request, $attributes);

        return $request->setTask($attributes['task']);
    }

    public function toArrayFromRequest(SingleTaskRequestContract $request): array
    {
        return [
            ...$this->parentSetArrayCommonAttributes($request),
            'task' => $request->getTask()
        ];
    }
}