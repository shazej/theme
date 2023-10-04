import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ReportsComponent } from './reports.component';


const routes: Routes = [
  {
    path: '',
    component: ReportsComponent,
    children: [
      {
        path: 'sales-report',
        loadChildren: () =>
          import('./salesreport/salesreport.module').then(
            (m) => m.SalesreportModule
          ),
      },
      {
        path: 'expenses-report',
        loadChildren: () =>
          import('./expensesreport/expensesreport.module').then(
            (m) => m.ExpensesreportModule
          ),
      },
      {
        path: 'profit-loss-report',
        loadChildren: () =>
          import('./profitlossreport/profitlossreport.module').then(
            (m) => m.ProfitlossreportModule
          ),
      },
      {
        path: 'taxs-report',
        loadChildren: () =>
          import('./taxsreport/taxsreport.module').then(
            (m) => m.TaxsreportModule
          ),
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ReportsRoutingModule {}
