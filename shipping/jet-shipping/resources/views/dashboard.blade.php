<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="row">
                  Welcome {{ Auth::user()->name }}
                  <section>
                    <form class="" action="index.html" method="post">
                      <input type="text" name="" value="">
                      <button type="button" name="button"></button>
                    </form>
                  </section>
                  <section>
                    <table id="dtPendingTable" class="table ml-5 table-striped table-bordered table-sm" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="th-sm">#
                          </th>
                          <th class="th-sm">Consignment
                          </th>
                          <th class="th-sm">Origin
                          </th>
                          <th class="th-sm">Destination
                          </th>
                          <th class="th-sm">Weight
                          </th>
                          <th class="th-sm">Price
                          </th>
                          <th class="th-sm">Travel Distance
                          </th>
                          <th class="th-sm">Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td> <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="">Pay</button> </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>#
                          </th>
                          <th>Consignment
                          </th>
                          <th>Origin
                          </th>
                          <th>Destination
                          </th>
                          <th>Weight
                          </th>
                          <th>Price
                          </th>
                          <th>Travel Distance
                          </th>
                          <th>Actions
                          </th>
                        </tr>
                      </tfoot>
                    </table>
                  </section>
                </div>
              </div>
            </div>
        </div>
    </div>
</x-app-layout>
