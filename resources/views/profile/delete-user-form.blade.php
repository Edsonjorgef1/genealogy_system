<x-action-section>
    <x-slot name="title">
        <div class="dark:text-gray-400">
            {{ __('Delete Account') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="dark:text-gray-100">
            {{ __('Permanently delete your account.') }}
        </div>
    </x-slot>

    <x-slot name="content">
        @php
            $headers = [
                ['index' => 'team', 'label' => __('team.team')],
                ['index' => 'users', 'label' => __('team.users')],
                ['index' => 'persons', 'label' => __('team.persons')],
                ['index' => 'couples', 'label' => __('team.couples')],
                ['index' => 'personal', 'label' => __('team.team_personal') . '?'],
            ];

            $rows = [];

            $teams = auth()->user()->teamsStatistics();

            foreach ($teams as $team) {
                array_push($rows, [
                    'team' => $team->name,
                    'users' => $team->users_count > 0 ? $team->users_count : '',
                    'persons' => $team->persons_count > 0 ? $team->persons_count : '',
                    'couples' => $team->couples_count > 0 ? $team->couples_count : '',
                    'personal' => $team->personal_team,
                ]);
            }
        @endphp

        <x-ts-table :$headers :$rows>
            @interact('column_personal', $row)
                @if ($row['personal'])
                    <x-ts-icon icon="circle-check" class="size-5 text-emerald-600" />
                @endif
            @endinteract
        </x-ts-table>

        <x-hr.normal />
        @if (auth()->user()->isDeletable())
            <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
            </div>

            <div class="mt-5">
                <x-ts-button color="danger" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </x-ts-button>
            </div>
        @else
            <x-ts-alert title="{{ __('Delete Account') }}" text="{{ __('Your account can not be deleted because it contains valid data.') }}" color="cyan" />
        @endif

        {{-- delete user confirmation modal --}}
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Delete Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4" autocomplete="current-password" placeholder="{{ __('Password') }}" x-ref="password" wire:model="password"
                        wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-ts-button color="secondary" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-ts-button>

                <x-ts-button color="danger" class="ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </x-ts-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>
