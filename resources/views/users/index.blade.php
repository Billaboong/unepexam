<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Create Staff
                    <form method="post" action="{{ route('user.store') }}" class="mt-6 space-y-6">
                        @csrf
                    
                
                        <div>
                            <x-input-label for="IndexNumber" :value="__('Index Number')" />
                            <x-text-input id="IndexNumber" name="IndexNumber" type="text" class="mt-1 block w-full" autocomplete="IndexNumber" />
                            <x-input-error :messages="$errors->updatePassword->get('IndexNumber')" class="mt-2" />
                        </div>
                
                        <div>
                            <x-input-label for="FullNames" :value="__('Full Names')" />
                            <x-text-input id="FullNames" name="FullNames" type="text" class="mt-1 block w-full" autocomplete="FullNames" />
                            <x-input-error :messages="$errors->updatePassword->get('FullNames')" class="mt-2" />
                        </div>
                
                        <div>
                            <x-input-label for="Emails" :value="__('Emails')" />
                            <x-text-input id="Emails" name="Emails" type="text" class="mt-1 block w-full" autocomplete="Emails" />
                            <x-input-error :messages="$errors->updatePassword->get('Emails')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="CurrentLocation" :value="__('Current Location')" />
                            <x-text-input id="CurrentLocation" name="CurrentLocation" type="text" class="mt-1 block w-full" autocomplete="CurrentLocation" />
                            <x-input-error :messages="$errors->updatePassword->get('CurrentLocation')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="HighestLevelOfEducation" :value="__('Highest LEvel of education')" />
                            <select name="HighestLevelOfEducation">
                                <option value="0">High School Certificate</option>
                                <option value="1">Degree</option>
                            </select>
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="update_password_password_confirmation" :value="__('Duty Station')" />
                            <select name="DutyStation">
                                <option value="0">Nairobi</option>
                                <option value="1">Valencia</option>
                            </select>
                            <x-input-error :messages="$errors->updatePassword->get('DutyStation')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="AvailabilityForRemoteWork" :value="__('Availability for Remote Work')" />
                            <select name="AvailabilityForRemoteWork">
                                <option>--Select--</option>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="SoftwareExpertise" :value="__('Software Expertise')" />
                            <select name="SoftwareExpertise">
                                <option>--Select--</option>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                            <x-input-error :messages="$errors->updatePassword->get('SoftwareExpertise')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="SoftwareExpertiseLevel" :value="__('Software Expertise Levels')" />
                            <select name="SoftwareExpertiseLevel">
                                <option>--Select--</option>
                                <option value="0">Poor</option>
                                <option value="1">Average</option>
                            </select>
                            <x-input-error :messages="$errors->updatePassword->get('SoftwareExpertiseLevel')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="Language" :value="__('Language')" />
                            <x-text-input id="Language" name="Language" type="text" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('Language')" class="mt-2" />
                        </div>

                                        
                        <div>
                            <x-input-label for="LevelofResponsibility" :value="__('level of resposibility')" />
                            <select name="LevelofResponsibility">
                                <option>--Select--</option>
                                <option value="0">Poor</option>
                                <option value="1">Average</option>
                            </select>
                            <x-input-error :messages="$errors->updatePassword->get('LevelofResponsibility')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                
                            @if (session('status') === 'password-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
     
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="users" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>highest Level of Education</th>
                                <th>DutySTtation</th>
                              
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
