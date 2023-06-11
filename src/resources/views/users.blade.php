<x-app-layout>
  <x-slot name="content">
    <section class="justify-center flex">
    <table class="users_table border-solid border-1 border-black">
      <tr>
        <th class="px-2 border-solid border-2 border-gray-300 bg-gray-300">ID</th>
        <th class="px-2 border-solid border-2 border-gray-300 bg-gray-300">名前</th>
        <th class="px-2 border-solid border-2 border-gray-300 bg-gray-300">email</th>
      </tr>
      @foreach($users as $user)
      <tr>
        <td class="px-2 border-solid border-2 border-gray-300">{{$user->id}}</td>
        <td class="px-2 border-solid border-2 border-gray-300">{{$user->name}}</td>
        <td class="px-2 border-solid border-2 border-gray-300">{{$user->email}}</td>
      </tr>
      @endforeach
    </table>
  </section>
  </x-slot>
  <x-slot name="line"></x-slot>
</x-app-layout>