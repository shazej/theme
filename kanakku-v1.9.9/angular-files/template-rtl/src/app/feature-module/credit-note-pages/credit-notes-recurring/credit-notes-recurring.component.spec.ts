import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CreditNotesRecurringComponent } from './credit-notes-recurring.component';

describe('CreditNotesRecurringComponent', () => {
  let component: CreditNotesRecurringComponent;
  let fixture: ComponentFixture<CreditNotesRecurringComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CreditNotesRecurringComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CreditNotesRecurringComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
