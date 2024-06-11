<x-layout>
    <x-breadcrumbs class="mb-4"
    :links="[
        'Jobs'=>route('jobs.index'),
        $job->title=>'#', 
        'Apply' => route('job.application.create',$job)
        ]"/>
    <x-job-card :$job>
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($job->description)) !!}
          </p>

          @can('apply',$job)
            <x-link-button :href="route('job.application.create',$job)">
                Apply
            </x-link-button>
          @else
          <div class="text-center text-sm font-medium text-slate-500">
            You have already applied for this job.
          </div>
          @endcan
    </x-job-card>

    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">
            More {{$job->employer->company_name}} jobs
        </h2>

        <div class="text-sm text-slate-500">
            @foreach ($job->employer->jobs as $otherJob )
                <div class="mb-4 flex justify-between bg-gray-50 rounded-md shadow-md px-2 py-2 hover:bg-gray-200 items-center">
                    <div>
                        <div class="text-slate-700">
                           <a href="{{route('jobs.show', $otherJob)}}">
                            {{$otherJob->title}}
                           </a>
                        </div>
                        <div class="text-xs">
                            {{$otherJob->created_at->diffForHumans()}}
                        </div>
                    </div>
                    <div class="text-xs text-green-700">
                        ₹{{number_format($otherJob->salary)}}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>