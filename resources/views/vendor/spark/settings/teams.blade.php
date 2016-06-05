<spark-teams :user="user" :teams="teams" inline-template>
    <div>
        <!-- Create Team -->
        @include('spark::settings.teams.create-team')

        <!-- Pending Invitations -->
        @include('spark::settings.teams.pending-invitations')

        <!-- Current Teams -->
        <div v-if="user && teams.length > 0">
            @include('spark::settings.teams.current-teams')
        </div>
    </div>
</spark-teams>
